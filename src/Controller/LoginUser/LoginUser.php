<?php 

namespace Controller\LoginUser;

use Mpwarfwk\Component\BaseController;
use Mpwarfwk\Component\Response\HttpResponse;
use Mpwarfwk\Component\Container\Container;
use Mpwarfwk\Component\Database\SQL;

class LoginUser extends BaseController
{

	public function mainAction($request)
	{
		
		if($request->session->getValue("username"))
		{

			$name=$request->session->getValue("username");
			if ($name!="")
			{
				$response = new HttpResponse("<h3>Session already started. Hello: ".$name."</h3>",HttpResponse::HTTP_OK);
				return $response;	
			}
		}

		if ($request->method=='POST')
		{
			if ( !$this->checkCredentials($request->post["username"], $request->post["password"] ) )
			{
				$response = new HttpResponse($this->errorLogin(),HttpResponse::HTTP_OK);
					
			}
			else
			{
				$request->session->setValue("username",  $request->post["username"]);
				$response = new HttpResponse($this->helloUser($request->post["username"]),HttpResponse::HTTP_OK);
			}
		}
		else
		{
			$response = new HttpResponse($this->formLogin(),HttpResponse::HTTP_OK);
		}

		return $response;	
	}


	function formLogin()
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('formLogin.twig',array( 'msg'=> ""));

		return $resultview;
	}


	function errorLogin()
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('errortemplate.twig',array( 'msg'=> "Wrong username or password"));

		return $resultview;
	}

	function helloUser($name)
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('loginCorrect.twig',array( 'name'=>$name));

		return $resultview;
	}


	function checkCredentials( $username, $password )
	{
		$database = SQL::getDB();
	    $statement = $database->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
	    $statement->bindParam(':username', $username, \PDO::PARAM_STR);
	    $statement->bindParam(':password', $password, \PDO::PARAM_STR);
	    $statement->execute();

	    return $statement->fetch();
	}


}

