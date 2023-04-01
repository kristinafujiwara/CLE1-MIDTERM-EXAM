<?php
include_once 'config/config.php';
include_once 'classes/class.admin.php';

$admin = new admin();
if($admin->get_session()){
	header("location: index.php");
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $admin->check_login($useremail,$password);
	if($login){
		header("location: index.php");
	}else{
		?>
        <div id='error_notif'>Incorrect email or password</div>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Application Name</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body>
	<img src = "img/v3.png" alt = "logo" style = "" class = "image">
<div id="brand-block">
	<style>
		body{
			background-color: #EC3732;
		}
		</style>
</div>
<div id="login-block">
	<h3 class="title">V3 Pestmasters Admin Login</h3>
	<form method="POST" action="" name="login">
	<div>
		<input type="email" class="input" required name="useremail" placeholder="E-mail"/>
	</div>
	<div>
		<input type="password" class="input" required name="password" placeholder="Password"/>
	</div>
	<div id="button-block4">
		<input type="submit" name="submit" value="Login"/>
	</div>
	</form>
</div>
</body>
</html>