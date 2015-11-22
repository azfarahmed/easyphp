<style type="text/css">
.user-form input, .user-form label{
	border-color: #01579b !important;;
	color: #01579b !important;
}
</style>

<h1> Create User </h1>

<?php 
if(!empty($errors)) {
	foreach($errors as $message) {
		echo "<span style='color: red'>".$message[0]."</span><br/>"; 
	}
}
if (!empty($result)) {
	if($result == 1) {
		echo "<span style='color: green'> Succesfully Added! </span> <a href='".$GLOBALS['ep_dynamic_url']."users/userlist'> Go Back </a>";
	}
}

?>

<div class="user-form" style="float: left; width: 100%;"> 
	<div class="row">
		<form action="<?php echo $GLOBALS['ep_dynamic_url']; ?>users/create" method="post" class="col s12">
		  <div class="row">
			<div class="input-field col s12">
			  <input  id="username" name="username" type="text" class="validate" value="<?php if(isset($_POST['username'])) { echo $post['username']; } ?>">
			  <label for="username">Username</label>
			</div>
			<div class="input-field col s12">
			  <input id="name" name="name" type="text" class="validate" value="<?php if(isset($_POST['name'])) { echo $post['name']; } ?>">
			  <label for="name">Name</label>
			</div>	  			
		  <div class="input-field col s12">
			  <input id="email" name="email" type="text" class="validate" value="<?php if(isset($_POST['email'])) { echo $post['email']; } ?>">
			  <label for="email">Email</label>
			</div>
			<div class="input-field col s12">
			  <input id="location" name="location" type="text" class="validate" value="<?php if(isset($_POST['location'])) { echo $post['location']; } ?>">
			  <label for="location">Location</label>
			</div>
			<div class="input-field col s12">
				<select name="gender" class="browser-default" >
				  <option value="" disabled selected>Gender</option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				</select>
				
			</div>
			<div class="input-field col s12">
				<button class="btn waves-effect waves-light light-blue darken-4" type="submit" style="margin-top: 20px;">Submit
					<i class="material-icons right">send</i>
				</button>
			</div>
		  </div>
		</form>
</div>

<a href='<?php echo $GLOBALS['ep_dynamic_url']; ?>users/userlist'> Go Back </a>
