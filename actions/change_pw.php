<?php
session_start();
$current_pw=$_POST['current_pw'];
$hash_current_pw=sha1($current_pw);
$new_pw=$_POST['new_pw'];
$new_confirm_pw=$_POST['new_confirm_pw'];
$user_email=$_SESSION['username'];
include('../dbconnection.php');

$sql_verify_pw="SELECT * FROM  tbl_user WHERE user_password='$hash_current_pw' and user_email='$user_email'";
$res_verify_pw=mysqli_query($conn,$sql_verify_pw);
$row_count=mysqli_num_rows($res_verify_pw);

if($row_count>=1){
	if($new_pw==$new_confirm_pw){
		$hash_new_pw=sha1($new_pw);
		$sql_update="UPDATE tbl_user SET user_password='$hash_new_pw' WHERE user_email='$user_email'";
		if(mysqli_query($conn,$sql_update)){
			// Password Change Success
			echo "<div class='alert alert-success alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h5><i class='icon fas fa-check'></i> Alert!</h5>
					  Password Changed!
					</div>
		";
		}
		else{
			// Password Change Error
		echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Error!
                </div>";
		}
	}
	else{
		// New password and Confirm password mismatch
		echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  New password and Confirm password mismatch!
                </div>";
		
	}
}
else{
	// Current Password incorrect
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Current Password is Incorrect!
                </div>";
	
}