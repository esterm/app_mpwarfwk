<?php 

namespace Controller\LogoutUser;

use Mpwarfwk\Component\BaseController;
use Mpwarfwk\Component\Response\HttpResponse;
use Mpwarfwk\Component\Container\Container;


class LogoutUser extends BaseController
{

	public function mainAction($request)
	{
		
		session_destroy();
		$response = new HttpResponse("<h3>Logout ok. You can do  a Login in the menu</h3>",HttpResponse::HTTP_OK);
		
		return $response;	
	}


	function formLogin()
	{
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('formLogin.twig',array( 'msg'=> ""));

		return $resultview;
	}

}

