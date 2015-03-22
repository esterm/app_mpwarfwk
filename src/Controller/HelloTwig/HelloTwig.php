<?php
namespace Controller\HelloTwig;

use Mpwarfwk\Component\BaseController;
use Mpwarfwk\Component\Templating\TwigTemplate;
use Mpwarfwk\Component\Response\HttpResponse;
use Mpwarfwk\Component\Response\jsonResponse;

class HelloTwig extends BaseController{


	public function mainAction($request,$extraParams)
	{
		
		$arrayParams[]=array();
		$arrayParams[0]="No users in the url";

		for($i=0;$i<count($extraParams);$i++){
				$arrayParams[$i]=$extraParams[$i];
		}
	
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('hellotwigtemplate.twig', array('data' => $arrayParams));
		$response = new HttpResponse($resultview,HttpResponse::HTTP_OK);
		$response->sendHeaders();

		
		return $response;	
	}

	public function jsonAction($request,$extraParams)
	{
		
		$arrayParams[]=array();
		$arrayParams[0]="No users in the url";

		for($i=0;$i<count($extraParams);$i++){
				$arrayParams[$i]=$extraParams[$i];
		}
	
		$template= $this->container->get("twigtemplate");
		$resultview=$template->renderTemplate('hellotwigjson.twig', array('data' => $arrayParams));
		$response = new JsonResponse($resultview,HttpResponse::HTTP_OK);
		$response->sendHeaders();

		
		return $response;	
	}

	

}
