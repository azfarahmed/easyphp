  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">EasyPhp Light MVC Framework</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="<?php echo $ep_dynamic_url; ?>home">Home</a></li>
      </ul>
    </div>
  </nav>
 
 <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"> Introduction </div>
      <div class="collapsible-body">
		<h5> About </h5>
		<p> EasyPhp is a Light MVC PHP Framework specially designed for small PHP projects. EasyPhp is pre-integrated with Materialize a modern responsive front-end framework. EasyPhp works only with <b> PHP version 5.3 or above. </b></p> 
		<h5> Version </h5>
		<p> The latest is <b> Version 1.0 </b> </p>
		<h5> Download </h5>
		<p> Please click <a href="#"> here </a> to download </p>
		</div>
    </li>
    <li>
      <div class="collapsible-header"> Installation </div>
      <div class="collapsible-body"><p>
	  <br/>
	   <h5 style="font-size:18px; font-weight: bold"> EasyPhp can be installed in following simple steps: </h5>
	   1. Unzip the package. <br/>
	   2. Upload the EasyPhp files to the server. <br/>
	   3. Follow the steps from Configuration menu.
	  </p></div>
    </li>
    <li>
      <div class="collapsible-header"> Configuration </div>
      <div class="collapsible-body"><p><br/> 
	   <h5 style="font-size:18px; font-weight: bold"> Go to /library/ directory open config.php. Set the following important parameter - </h5>
	   <br/> 
	   <b> ep_base_url - </b> Set base URL with trailing your directory. For ex: http://yourdomain.com/easyphp. <br/> <br/> 
	   <b> ep_dynamic_url - </b> Set Dynamic  URL with trailing your directory. Dynamic URL changes as per set SEO configuration For ex: When set SEO URL is true URL will be http://yourdomain.com/easyphp/home/id/1, When it is false URL will be http://yourdomain.com/easyphp?params=home/id/1. <br/> <br/>
	   <b> seourl - </b> Set true if .htaccess file works (SEO friendly URL) else if your installing in local server & if .htaccess file doesn't work please set it false. <br/> <br/> 
	   <b> ep_first_page - </b> Set landing page for website. <br/> <br/> 
	   <b> ep_hostname, ep_username, ep_password, ep_database - </b> Set database settings. <br/> <br/> 
	   <h5 style="font-size:18px; font-weight: bold"> <b> Done! </b>  You are ready to go...</h5> 
	  </p></div>
    </li>
	<li>
      <div class="collapsible-header"> How to Use? </div>
      <div class="collapsible-body"><p> <br/> <br/>   
	  We use  Model-View-Controller approach. Our Framework generates a clean and SEO friendly URLS in following format - <b> http://tutbuzz.com/[controller-class]/[controller-method]/[arguments]. </b> <br/> <br/>
		
		<b> Model-View-Controller </b> <br/>
		The <b> Model </b>  represents your data structures. Typically your model classes will contain functions that help you retrieve, insert, and update information in your database. <br/>
		The <b> View </b> is the information that is being presented to a user its normally a web page. <br/>
		The <b> Controller </b> serves as an intermediary between the Model, the View, and any other resources needed to process the HTTP request and generate a web page. <br/> <br/>

		<b> Controller -  </b> <br/>
		1. Controller files should kept inside controller folder. <br/>
		2. Controller file name and class name should be same. Ex: If the file name is 'user.php' then its class name should be 'class user { }'. <br/>
		3. Controller class name should be used as a part of URL to access its page. Ex: If controller class name is 'user' then your page URL will be http://yourdomain.com/user.  <br/>
		4. Controller method will be called when its name is mentioned next to its class in the URL. Ex: http://yourdomain.com/user/list, where the list is your method. <br/>
		5. Controller method arguments should be given from the URL like - http://yourdomain.com/user/list/[argument Name 1]/[argument 1]/[argument Name 2]/[argument 2]. Argument names are absolutely necessary. Ex: http://yourdomain.com/user/list/id1/12/id2/95, here arguments supplied are 12 and 95. <br/>
		6. Adding view - <br/>
		Header page - You need to use "$data['ep_header'] = 'pagename.php' " inside your function. <br/>
		Footer page - You need to use "$data['ep_footer'] = 'pagename.php' " inside your function. <br/>
		View Page - You need to use "$data['view_page'] = 'pagename.php' " inside your function. <br/>
		Note: To hide any layout use "false" instead of pagename.php. <br/>
		7. To Add your Page Title - "$data['title'] = 'Page Title' "; <br/>
		8. To pass any variable or an array to your view please use "$data['variable_Name'] = 'your variable value' ". Now from your view page use variable key as variable name for example here $variable_Name consists of variable value. <br/> 
		9. Call your respective model class inside "__construct()" function. Ex: $this->model = new users_model();<br/> 
		10. Please browse the example files given inside the model folder. All files are self explanatory. <br/> <br/>
		
		<b> Model -  </b> <br/>
		1. Model files should be kept inside Model folder. <br/>
		2. Model file name should be same as controller file name. <br/>
		3. Model class name should be same as controller class but "_model" should be added in the end. Ex: if Class is users then model Class will be users_model. Please extend the class to "DBconfig"; <br/>
		4. "DBconfig" class should be called for database connection. <br/>
		5. "helper" class can also be called for easy database actions. <br/>
		6. Please browse the example files given inside the model folder. Files are self explanatory. <br/> <br/>  
		
		<b> View -  </b> <br/>
		1. Front-end files include css, javascript, images, fonts etc, these files are kept inside view folder.
		2. View files should be kept inside View folder as well. <br/>
		3. There are two default master pages header.php and footer.php.  <br/>
		4. Materialize a front-end framework is already integrated, you can find the included files inside header.php. Please go to <a href="http://goo.gl/YEemXn" target="_blank"> www.materializecss.com </a> for its documentation.  <br/>
		5. Please browse the example files given inside the view/users folder. Files are self explanatory. <br/> <br/>
		
		<b> Database Helpers </b> <br/>
		Database helper helps to write minimal lines of code to execute an Mysql query. Use "$this->helper = new helper();" to call helper library. Below are some of the common helper functions - <br/>
		<b> Select (only executes the query) -  </b>  $this->helper->db_select("column_selector", "table_name", "where_conditions & sorting"); <br/>
		<b> Insert - </b> $this->helper->db_insert("post Or get_data_array", "table_name"); <br/>
		<b> Update - </b> $this->helper->db_update("post Or get_data_array", "table_name", "where_conditions"); <br/>
		<b> Delete - </b> $this->helper->db_delete("table_name", "where_conditions"); <br/> 
		<b> Check if data exists (returns true/false) - </b> $this->helper->check("table_name", "where_conditions"); <br/> <br/> 
		
		<b> Router </b> <br/>
		Router helps to reroute the URL paths, by giving access to important URL parameters and its functions. Ex: If you want to achieve URL like yourdomain.com/username can be possible using router. Router file can be found in library/routes.php.<br/> <br/>
		<b> Plugins </b> <br/>
		All your third party PHP libraries will go inside plugins directory. Once added necessary files should be included inside plugins/plugins.php. <br/> <br/>
		<b> $GLOBALS['ep_base_url'] -  </b>  This variable consists of your base URL. This variable can be used inside controllers, models and views. <br/> <br/>
		<b> $GLOBALS['ep_dynamic_url'] -  </b>  This variable consists of your base URL as well but will change if seourl is set to false. This variable can be used inside controllers, models and views. <br/> <br/>
		<b> Form Validation -  </b>  We use third party library called "valitron" for validation. Uncomment the lines inside plugins/plugins.php to include the plugin. Please go to <a href="https://goo.gl/EL71Wd"target="_blank" > Valitron </a> for its documentation.  <br/> <br/>
		
		</p></div>
	</li>
	
	<li>
      <div class="collapsible-header"> Create your first project  </div>
      <div class="collapsible-body"><p> <br/> <br/>   Lets build a small project to learn using our framework. This project helps to maintain record of Users database, this will help you to perform basic CRUD option using our Framework. Please follow these steps given below, all codes are self explanatory. <br/> <br/> 
1. Create a database and run the following query - <pre><code> CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;
</code></pre> <br/> <br/>

2. Go to controller folder, create a file called users.php. Add following code - 
<pre><code> 
&lt;?php		
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
			echo "<span style='color: green'> Succesfully Deleted! </span> <a href='".$GLOBALS['ep_base_url']."users/userlist'> Go Back </a>";
		}
		$data['ep_title'] = "Deleted"; //setting title name
		$data['view_page'] = "false"; //controller view page
		$data['ep_header'] = $GLOBALS['ep_header']; //header view (Also Ex: "header.php")
		$data['ep_footer'] = $GLOBALS['ep_footer']; //footer view 
		return $data;
	}	
	
}

</code></pre>

<b> Note: </b>  <p> Please keep the controller file name and its class with same name. </p> <br/> <br/>

3. Go to model folder, create a file called users.php. Add following code - <pre><code>

class users_model extends DBconfig {
	
	public function __construct()
	  {
		$connection = new DBconfig();  // database connection
		$this->connection = $connection->connectToDatabase();
		$this->helper = new helper(); // calling helper class
	  }
	  
	public function getAllUsers() {
		//Ex: $result = $this->helper->db_select("column_selector", "table_name", "where conditions");
		$result = $this->helper->db_select("*", "users", "");
		return $result;
	}
	
	public function insertUser($data, $table) {	
		//Ex: $result = $this->helper->db_insert("post Or get_data_array", "table_name");	
		$result = $this->helper->db_insert($data, $table);
		return $result;
	}
	
	public function updateUser($data, $table, $id) {		
		//Ex: $result = $this->helper->db_update("post Or get_data_array", "table_name", "where_conditions");
		$result = $this->helper->db_update($data, $table, "WHERE id='$id'");
		return $result;
	}
	
	public function getUserById($id) {		
		//Ex: $result = $this->helper->db_update("post Or get_data_array", "table_name", "where_conditions");
		$resultRaw = $this->helper->db_select("*", "users", "WHERE id='$id'");
		$result = $resultRaw->fetch_assoc();
		return $result;
	}
	
	public function deleteUserById($id) {		
		//Ex: $result = $this->helper->db_delete("table_name", "where conditions");
		$result = $this->helper->db_delete("users", "WHERE id='$id'");
		return $result;
	}
	
}

</code></pre> <br/> <br/>

4. Go to controller folder, create a folder called 'users' inside this create three files create.php, list.php & update.php - <br/> <br/> 
Add following code under create.php - 
<pre><code>
&lt;style type=&quot;text/css&quot;&gt;
.user-form input, .user-form label{
	border-color: #01579b !important;;
	color: #01579b !important;
}
&lt;/style&gt;

&lt;h1&gt; Create User &lt;/h1&gt;

&lt;?php 
if(!empty($errors)) {
	foreach($errors as $message) {
		echo &quot;&lt;span style='color: red'&gt;&quot;.$message[0].&quot;&lt;/span&gt;&lt;br/&gt;&quot;; 
	}
}
if($result == 1) {
	echo &quot;&lt;span style='color: green'&gt; Succesfully Added! &lt;/span&gt; &lt;a href='&quot;.$GLOBALS['ep_dynamic_url'].&quot;users/userlist'&gt; Go Back &lt;/a&gt;&quot;;
}
?&gt;

&lt;div class=&quot;user-form&quot; style=&quot;float: left; width: 100%;&quot;&gt; 
	&lt;div class=&quot;row&quot;&gt;
		&lt;form action=&quot;&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/create&quot; method=&quot;post&quot; class=&quot;col s12&quot;&gt;
		  &lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input  id=&quot;username&quot; name=&quot;username&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['username']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;username&quot;&gt;Username&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input id=&quot;name&quot; name=&quot;name&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['name']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;
			&lt;/div&gt;	  			
		  &lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input id=&quot;email&quot; name=&quot;email&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['email']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;email&quot;&gt;Email&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input id=&quot;location&quot; name=&quot;location&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['location']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;location&quot;&gt;Location&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
				&lt;select name=&quot;gender&quot; class=&quot;browser-default&quot; &gt;
				  &lt;option value=&quot;&quot; disabled selected&gt;Gender&lt;/option&gt;
				  &lt;option value=&quot;Male&quot;&gt;Male&lt;/option&gt;
				  &lt;option value=&quot;Female&quot;&gt;Female&lt;/option&gt;
				&lt;/select&gt;
				
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
				&lt;button class=&quot;btn waves-effect waves-light light-blue darken-4&quot; type=&quot;submit&quot; style=&quot;margin-top: 20px;&quot;&gt;Submit
					&lt;i class=&quot;material-icons right&quot;&gt;send&lt;/i&gt;
				&lt;/button&gt;
			&lt;/div&gt;
		  &lt;/div&gt;
		&lt;/form&gt;
&lt;/div&gt;

&lt;a href='&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/userlist'&gt; Go Back &lt;/a&gt;

</code></pre> <br/> <br/>  Add following code under update.php -  <pre><code> &lt;style type=&quot;text/css&quot;&gt;
.user-form input, .user-form label{
	border-color: #01579b !important;;
	color: #01579b !important;
}
&lt;/style&gt;

&lt;h1&gt; Update User &lt;/h1&gt;

&lt;?php 
if(!empty($errors)) {
	foreach($errors as $message) {
		echo &quot;&lt;span style='color: red'&gt;&quot;.$message[0].&quot;&lt;/span&gt;&lt;br/&gt;&quot;; 
	}
}
if($result == 1) {
	echo &quot;&lt;span style='color: green'&gt; Succesfully Updated! &lt;/span&gt; &lt;a href='&quot;.$GLOBALS['ep_dynamic_url'].&quot;users/userlist'&gt; Go Back &lt;/a&gt;&quot;;
}
?&gt;

&lt;div class=&quot;user-form&quot; style=&quot;float: left; width: 100%;&quot;&gt; 
	&lt;div class=&quot;row &quot;&gt;
		&lt;form action=&quot;&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/update/id/&lt;?php echo $user_id; ?&gt;&quot; method=&quot;post&quot; class=&quot;col s12&quot;&gt;
		  &lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input  id=&quot;username&quot; name=&quot;username&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['username']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;username&quot;&gt;Username&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input id=&quot;name&quot; name=&quot;name&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['name']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;
			&lt;/div&gt;	  			
		  &lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input id=&quot;email&quot; name=&quot;email&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['email']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;email&quot;&gt;Email&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
			  &lt;input id=&quot;location&quot; name=&quot;location&quot; type=&quot;text&quot; class=&quot;validate&quot; value=&quot;&lt;?php echo $post['location']; ?&gt;&quot;&gt;
			  &lt;label for=&quot;location&quot;&gt;Location&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
				&lt;select name=&quot;gender&quot; class=&quot;browser-default&quot; &gt;
				  &lt;option value=&quot;&quot; disabled selected&gt;Gender&lt;/option&gt;
				  &lt;option value=&quot;Male&quot; &lt;?php if($post['gender'] == &quot;Male&quot;) { echo &quot;selected&quot;; } ?&gt;&gt;Male&lt;/option&gt;
				  &lt;option value=&quot;Female&quot; &lt;?php if($post['gender'] == &quot;Female&quot;) { echo &quot;selected&quot;; } ?&gt;&gt;Female&lt;/option&gt;
				&lt;/select&gt;
				
			&lt;/div&gt;
			&lt;div class=&quot;input-field col s12&quot;&gt;
				&lt;button class=&quot;btn waves-effect waves-light light-blue darken-4&quot; type=&quot;submit&quot; style=&quot;margin-top: 20px;&quot;&gt;Submit
					&lt;i class=&quot;material-icons right&quot;&gt;send&lt;/i&gt;
				&lt;/button&gt;
			&lt;/div&gt;
		  &lt;/div&gt;
		&lt;/form&gt;
&lt;/div&gt;

&lt;a href='&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/userlist'&gt; Go Back &lt;/a&gt;
</code></pre> <br/> <br/> Add following code under list.php -  <pre><code> 			
&lt;style&gt;
.striped {
	border-top: 1px solid #01579b;
	border-left: 1px solid #01579b;
}
.striped th, .striped td {
	padding: 20px;
	text-align: center;
	border-right: 1px solid #01579b;
	border-bottom: 1px solid #01579b;
}
.striped th {
	background: #01579b;
	color: white;
	border-radius: 0;
}
.striped td {
	background: #e1f5fe;
}
.striped td, .striped td a {
	color: #01579b;
}
&lt;/style&gt;

&lt;h1&gt; Users &lt;/h1&gt;

&lt;a href=&quot;&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/create&quot; class=&quot;btn-floating btn-large waves-effect waves-light light-blue darken-4&quot;&gt;&lt;i class=&quot;material-icons&quot;&gt;add&lt;/i&gt;&lt;/a&gt; &lt;br/&gt; &lt;br/&gt;

&lt;table class=&quot;striped&quot; style=&quot;background: white; padding: 10px; width: 100%; float: left&quot;&gt;
	&lt;tr&gt;
		&lt;thead&gt;
			&lt;th&gt; Id &lt;/th&gt;
			&lt;th&gt; Username &lt;/th&gt;
			&lt;th&gt; Name &lt;/th&gt;
			&lt;th&gt; Email &lt;/th&gt;
			&lt;th&gt; Gender &lt;/th&gt;
			&lt;th&gt; Action &lt;/th&gt;
		&lt;/thead&gt;
	&lt;/tr&gt;
	&lt;?php while($row = $userlistarray-&gt;fetch_assoc()) { ?&gt;
	&lt;tr&gt;
		&lt;tbody&gt;
			&lt;td&gt; &lt;?php echo $row['id']; ?&gt; &lt;/td&gt;
			&lt;td&gt; &lt;?php echo $row['username']; ?&gt; &lt;/td&gt;
			&lt;td&gt; &lt;?php echo $row['name']; ?&gt; &lt;/td&gt;
			&lt;td&gt; &lt;?php echo $row['email']; ?&gt; &lt;/td&gt;
			&lt;td&gt; &lt;?php echo $row['gender']; ?&gt; &lt;/td&gt;
			&lt;td&gt; &lt;a href=&quot;&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/update/id/&lt;?php echo $row['id']; ?&gt;&quot;&gt; [Edit] &lt;/a&gt; | &lt;a href=&quot;&lt;?php echo $GLOBALS['ep_dynamic_url']; ?&gt;users/userdelete/id/&lt;?php echo $row['id']; ?&gt;&quot;&gt;  [Delete] &lt;/a&gt; &lt;/td&gt;
		&lt;/tbody&gt;
	&lt;/tr&gt;
	&lt;?php } ?&gt;
&lt;/table&gt;
</code></pre>	

<br/>

<b> Now go to www.yourdomain.com/users/userlist to access the page or if you set seourl as false go to www.yourdomain.com/?params=users/userlist. </b>
	  </p></div>
    </li> 	
  </ul>
  
  
		<center>
			&#169; <?php echo date('Y'); ?> Tutbuzz 
		</center>
				<br/>