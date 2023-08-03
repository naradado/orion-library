<?php
session_start();
include('../dbconnection.php');
$email=$_POST['email'];
$pwd=$_POST['password'];
$encryptedPW=sha1($pwd);
$sql_getuser="SELECT * FROM tbl_user WHERE user_email='$email' AND user_password='$encryptedPW'";
$result_getuser=mysqli_query($conn,$sql_getuser);
$row_data=mysqli_fetch_array($result_getuser);
$row_count=mysqli_num_rows($result_getuser);

if($row_count>=1){
	//Login Success
	if($row_data['user_enabled']==1){
	$_SESSION["username"]=$email;
?>
<script>window.location.replace("index.php");</script>
<?php
	}
else{
	echo "<div class='alert alert-warning alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h5><i class='icon fas fa-check'></i> Alert!</h5>
					  User Innactive!
					</div>";
}	
}
else{
	//Login Failed
	echo "<div class='alert alert-warning alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h5><i class='icon fas fa-check'></i> Alert!</h5>
					  Incorrect Email or Password!
					</div>";
}
