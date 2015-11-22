<?php 
/**
 * Default page
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */
 
class home {
	
	public function __construct()
	  {
		//Calling your Model class for the page
			$model = new home_model(); 
	  }
	
	public function index() {	
		$data['ep_title'] = "Easy Php MVC Framework"; //setting title name
		$data['view_page'] = "home.php"; //controller view page
		$data['ep_header'] = $GLOBALS['ep_header']; //header view (Also Ex: "header.php")
		$data['ep_footer'] = $GLOBALS['ep_footer']; //footer view 
		return $data;
	}
	
}