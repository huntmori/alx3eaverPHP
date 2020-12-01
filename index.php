<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once("./vendor/autoload.php");
	// $test = new src\controller\boardController();
	// $test->helloWorld();
	echo 'tes1t';

	echo '<pre>';
	print_r($_REQUEST);
	echo '</pre>';

	if(empty($_REQUEST)){
		$_REQUEST['url'] = 'app/home/index';
	}
	$routing = explode("/", $_REQUEST['url']);
	$routing[count($routing)-2] = $routing[count($routing)-2]."Controller";
	
	echo '<pre>';
	print_r($routing);
	echo '</pre>';

	$path = "src\\controller\\";
	$_REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
	
	$method = $routing[count($routing)-1]."_".$_REQUEST_METHOD;
	echo '<br>MethodName is : '.$method."<br>";

	echo '<br>path:'.($path).'<br>';
	for($i=0; $i<count($routing)-1; $i++){
		if($i == count($routing)-2 ){
			$path.=$routing[$i]."";
		}
		else{
			$path.=$routing[$i]."\\";
		}
	}
	echo '<br>path:'.($path).'<br>';

	$controller = new $path();
	var_dump($controller);
	$controller->__call($method, $_REQUEST);
	echo '<BR>';
	$controller->$method($_REQUEST);
?>	