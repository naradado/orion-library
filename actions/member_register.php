<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$add=$_POST['add'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$encrypted_pw=sha1($pwd);

include('../dbconnection.php');
$sql="INSERT INTO  tbl_user (user_fname,user_lname,user_address,user_tel,user_email,user_password,user_roll_id,user_enabled)
VALUES('$fname','$lname','$add','$tel','$email','$encrypted_pw',3,0)";
if(mysqli_query($conn,$sql)){
	echo "<div class='alert alert-success alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Membership Registration Success!
                </div>
	";
}
else{
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Error!
                </div>";
}
?>