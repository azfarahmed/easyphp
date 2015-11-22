<?php 
/**
 * Page Routes
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */
 
/**
 * Important variables
 *
 * $controller - Gets first value after slash from URL - Also calls Contoller when value is set
 * $func - Gets second value after slash from URL - Also calls method inside the class when value is set
 * $params - Gets all other values in array - Also supplies as arguemnts to functions
 */

 
 /* 
 
 This exmaple below explains user own sub domain URL. Ex: yourdomain.com/username.
 
 If user exists it will be redirected to user profile controller else it will be redirected as usual.
 
 */
 
// $helper = new helper();
// $check = $helper->check("users", "where username='$controller'");
// if($check) {
	// $GLOBALS['user'] = $controller;
	// $controller = "profile"; 
	// $func = "index";
// }	
