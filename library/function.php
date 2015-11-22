<?php 
/**
 * Functions
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */
 
 
//Defining the variables
$controller = "";
$func = "index";
$params = "";
$var = array();
$params = array();
$var['ep_header'] = "";
$var['ep_footer'] = "";

//Getting the parameters from URL. 
if(isset($_GET['params'])) {
	$paramsRawUnfiltered = $_GET['params'];
	$paramsRawUnfiltered = strip_tags($paramsRawUnfiltered);
	$paramsRaw = explode( "/", $paramsRawUnfiltered); //Converting parameters to array.
	
	//Reading the parameter values, splitting them to controller, function and arguments. 
	if(count($paramsRaw) >= 0) $controller = $paramsRaw[0]; 
	if(count($paramsRaw) > 1) $func = $paramsRaw[1];	
	if(count($paramsRaw) > 1)  {
		for($i = 2; $i < count($paramsRaw); $i+=2) {
		  $params[] = $paramsRaw[$i+1];
		}
	}
}

//Including important files
include('library/config.php');
if(!$GLOBALS['ep_base_url']) {
	echo "<div style='background: red; color: yellow; padding: 20px;'> set base url - Please go to library/config.php to set </div>";
}
if(!$GLOBALS['ep_dynamic_url']) {
	echo "<div style='background: red; color: yellow; padding: 20px;'> set dynamic url - Please go to library/config.php to set </div>";
}
if(!$GLOBALS['ep_hostname'] || !$GLOBALS['ep_username'] || !$GLOBALS['ep_database']) {
	echo "<div style='background: red; color: yellow; padding: 20px;'> set database fields - Please go to library/config.php to set </div>";
}
include('library/database.php');

//Including all model files
$model_array    = 'model';
$model_files = scandir($model_array);
$model_files_filtered = array_diff($model_files, array('.', '..'));
foreach($model_files_filtered as $model) {
	if (strpos($model, '.') !== TRUE) {
		include('model/'.$model);
	}
}
include('library/helper.php');
include('plugins/plugins.php'); 
include('library/routes.php');

if(!$controller) $controller = $GLOBALS['ep_first_page'];
if(!$func) $func = "index";
if($GLOBALS['seourl'] == "false") $GLOBALS['ep_dynamic_url'] = $GLOBALS['ep_dynamic_url']."?params=";

//including the controller file by taking its name from url.
if (file_exists("controller/".$controller.".php")) {
	include("controller/".$controller.".php");
//Initializing the controller.
	$functions = new $controller(); 
//Retrieving the variable set in controller and setting them as variable name.
	if(method_exists($controller, $func)) {
		$var = call_user_func_array(array($functions, $func), $params);
		$keys = array_keys($var);
		foreach($keys as $key) {
			$$key = $var[$key];
		}
	}
}
//Building the view.
if($var['ep_header']) {
	if($var['ep_header'] && $var['ep_header'] != "false") {
		include('view/'.$var['ep_header']);	
	}
}
else {
	include('view/'.$GLOBALS['ep_header']);
}
if(method_exists($controller, $func)) {
	if($var['view_page'] != "false") {
		include('view/'.$var['view_page']); 
	}
}
else {
	include('view/404.php'); 
}
if($var['ep_footer']) {
	if($var['ep_footer'] && $var['ep_footer'] != "false") {
		include('view/'.$var['ep_footer']);	
	}
}
else {
	include('view/'.$GLOBALS['ep_footer']);
}
?>