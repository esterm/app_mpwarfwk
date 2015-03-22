<?php

error_reporting(E_ALL|E_STRICT);
error_reporting(E_ALL | ~E_NOTICE);
error_reporting(-1); 
ini_set("display_errors",1); 

require_once  __DIR__.'/../vendor/autoload.php';

use Mpwarfwk\Component\Session\Session;
use Mpwarfwk\Component\Request\Request;
use Mpwarfwk\Component\Bootstrap;
use Mpwarfwk\Component\Container\Container;
use Mpwarfwk\Component\Exceptions;
use Mpwarfwk\Component\Templating\TwigTemplate;

$container=new Container();
//try{
	$request=$container->get("request");
	$bootstrap=$container->get("bootstrap");
	$response = $bootstrap->handle($request);
	$response->printBody();
//}
//catch(Exceptions\ClassNotFoundException $excep){
	//echo exceptionErrorPage($excep->getMessage());
//}


function exceptionErrorPage($msg)
	{
		$template_variables = array( 'msg'=> $msg);
		$view=new TwigTemplate(__DIR__.'/../src/Templates');
		$resultview=$view->renderTemplate('errortemplate.twig',$template_variables);
		return $resultview;
	}

