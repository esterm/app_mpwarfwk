<?php 

namespace Controller\RegisterUser;

use Mpwarfwk\Component\BaseController;
use Mpwarfwk\Component\Database\SQL;
use Mpwarfwk\Component\Response\HttpResponse;
use Mpwarfwk;

class RegisterUser extends BaseController
{

	public function mainAction($request)
	{
		if($request->session){
			$name=$request->session->getValue("username");
			if ($name)
			{
				$response = new HttpResponse($this->userRegistered($name),HttpResponse::HTTP_OK);
			}
		}

		if (   $request->method=='POST' )
		{
			if ( empty($request->post["username"]) || empty($request->post["password"])  ) 
			{
				$response = new HttpResponse($this->errorLogin(),HttpResponse::HTTP_OK);
			}
			else
			{
				$username 		= $request->post["username"];
				$password 		= $request->post["password"] ;
				$database 		= SQL::getDB();

		        $statement = $database->prepare($this->getInsertSql());
		        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
		        $statement->bindParam(':password', $password, \PDO::PARAM_STR);
		        $statement->execute();

		        $response = new HttpResponse( $this->helloUser($request->post["username"]),HttpResponse::HTTP_OK);
			}
		}
		else
		{
			$response = new HttpResponse($this->formRegister(),HttpResponse::HTTP_OK);
	
		}
		return $response;	
			
	}

	function helloUser($name)
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('registerCorrect.twig',array( 'name'=>$name));

		return $resultview;
	}

	function formRegister()
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('formRegister.twig',array( 'msg'=> ""));

		return $resultview;
	}

	function errorRegister()
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$view->renderTemplate('errortemplate.twig',array( 'msg'=> "You  must fill username or password"));

		return $resultview;
	}

	function userRegistered($name)
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$view->renderTemplate('registerCorrect.twig',array( 'name'=>$name));

		return $resultview;
	}


      
	function getInsertSql()
	{
		return <<<QUERY
		INSERT INTO	users
			(username, password)
		VALUES
			(:username, :password)
QUERY;
	}


}


