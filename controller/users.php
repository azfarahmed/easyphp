<?php 
/**
 * User Controller
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */
 
class users {
	
	public function __construct()
	  {
		//Calling your Model class for page
			$this->model = new users_model(); 
	  }
	
	public function create() {	
		if (!empty($_POST)) {
			$data['post'] = $_POST; 
			//including validation
			$v = new Valitron\Validator($_POST); // Input array
			$v->rule('required', 'username');
			$v->rule('required', 'name');
			$v->rule('required', 'email');
			$v->rule('required', 'location');
			$v->rule('required', 'gender');
			$v->rule('email', 'email');
			if($v->validate()) {
				$data['result'] = $this->model->insertUser($_POST, "users");
			} else {
				// Errors
				$data['errors'] = $v->errors();
			}
		}
		$data['ep_title'] = "Create User"; //setting title name
		$data['view_page'] = "users/create.php"; //controller view page
		$data['ep_header'] = $GLOBALS['ep_header']; //header view (Also Ex: "header.php")
		$data['ep_footer'] = $GLOBALS['ep_footer']; //footer view 
		return $data;
	}
	
	public function update($id) {	
		if (!empty($_POST)) {
			$data['post'] = $_POST; 
			//enabling validation 
			$v = new Valitron\Validator($_POST); // Input array
			$v->rule('required', 'username');
			$v->rule('required', 'name');
			$v->rule('required', 'email');
			$v->rule('required', 'location');
			$v->rule('required', 'gender');
			$v->rule('email', 'email');
			if($v->validate()) {
				$data['result'] = $this->model->updateUser($_POST, "users", $id);
			} else {
				// Errors
				$data['errors'] = $v->errors();
			}
		}
		else {
			$data['post'] = $this->model->getUserById($id);
		}
		$data['user_id'] = $id;
		$data['ep_title'] = "Update User"; //setting title name
		$data['view_page'] = "users/update.php"; //controller view page
		$data['ep_header'] = $GLOBALS['ep_header']; //header view (Also Ex: "header.php")
		$data['ep_footer'] = $GLOBALS['ep_footer']; //footer view 
		return $data;
	}
	
	public function userlist() {	
		$data['ep_title'] = "User List "; //setting title name
		$data['userlistarray'] = $this->model->getAllUsers(); //getting user list from user model
		$data['view_page'] = "users/list.php"; //controller view page
		$data['ep_header'] = $GLOBALS['ep_header']; //header view (Also Ex: "header.php")
		$data['ep_footer'] = $GLOBALS['ep_footer']; //footer view 
		return $data;
	}
	
	public function userdelete($id) {	
		$delete = $this->model->deleteUserById($id);
		if($delete == 1) {
			echo "<span style='color: green'> Succesfully Deleted! </span> <a href='".$GLOBALS['ep_dynamic_url']."users/userlist'> Go Back </a>";
		}
		$data['ep_title'] = "Deleted"; //setting title name
		$data['view_page'] = "false"; //controller view page
		$data['ep_header'] = $GLOBALS['ep_header']; //header view (Also Ex: "header.php")
		$data['ep_footer'] = $GLOBALS['ep_footer']; //footer view 
		return $data;
	}	
	
}