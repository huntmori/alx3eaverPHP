<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once("./vendor/autoload.php");
	// $test = new src\controller\boardController();
	// $test->helloWorld();
	echo 'tes1t';

	echo '<pre>';
	var_dump($_REQUEST);
	echo '</pre>';
	$routing = explode("/", $_REQUEST['url']);
	$routing[count($routing)-2] = $routing[count($routing)-2]."Controller";
	var_dump($routing);
	$path = "src\\controller\\";
	$method = $routing[count($routing)-1];
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
	$controller->$method($_REQUEST);
?>	