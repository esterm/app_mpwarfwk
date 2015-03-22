<?php
namespace Controller\HelloSmarty;

use Mpwarfwk\Component\BaseController;
use Mpwarfwk\Component\SmartyTemplate;
use Mpwarfwk\Component\Response\HttpResponse;

class HelloSmarty extends BaseController{


	public function mainAction($request,$extraParams)
	{
		
		$template= $this->container->get("smartytemplate");

		$arrayParams[]=array();
		$arrayParams[0]="No users in the url";
	
		for($i=0;$i<count($extraParams);$i++){
				$arrayParams[$i]=$extraParams[$i];
		}
		
		$template->assignVars(array("title"=>"Hello Smarty","data"=>$arrayParams));
		$resultview=$template->renderTemplate(__DIR__.'/../../Templates/hellosmartytemplate.tpl');
		$response = new HttpResponse($resultview,HttpResponse::HTTP_OK);

		$response->sendHeaders();

		return $response;
	}

	
}
