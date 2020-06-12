<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sinhgad Student Council</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="font.css" 	type="text/css" media="all">
</head>
<body background="2.jpg">
    <h1 style="color:white;">Sinhgad Student Council Registration</h1>
	<div class="container">
		<h2>Create a New Account</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="text" name="first_name" placeholder="FIRST NAME" required="">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<input type="text" name="phone" placeholder="PHONE NUMBER" required="">
				<input type="text" name="college" placeholder="College" required="">
				<input type="text" name="dept" placeholder="Department" required="">
				<input type="text" name="reciept_no" placeholder="Reciept_no" required="">
				<input type="password" name="password" placeholder="PASSWORD" required="">
				<input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
				
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
					<p>Have an account?<a href="index.php">Login</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>