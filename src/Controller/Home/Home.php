<?php 

namespace Controller\Home;

use Mpwarfwk\Component\BaseController;
use Mpwarfwk\Component\Response\HttpResponse;
use Mpwarfwk\Component\Container\Container;

class Home extends BaseController
{


	public function mainAction($request)
	{
	

		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('homemenu.twig',array( 'name'=>""));

		$response = new HttpResponse($resultview,HttpResponse::HTTP_OK);

		//$response->sendHeaders();

		return $response;	
	}

	public function secondaryAction($request)
	{
		$response = new HttpResponse("This is the 'secondary' method of the class 'Home'",HttpResponse::HTTP_OK);

		return $response;
	}

	public function anotherAction($request)
	{
		$response = new HttpResponse("This is another method of the class 'Home'",HttpResponse::HTTP_OK);

		return $response;
	}
	
	

}