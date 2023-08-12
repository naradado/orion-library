<?php
$book_id=$_POST['book_id'];
include('../dbconnection.php');

$sql_deletebook="DELETE FROM tbl_book WHERE book_id=$book_id";
if(mysqli_query($conn,$sql_deletebook)){
		echo "<div class='alert alert-success alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h5><i class='icon fas fa-check'></i> Alert!</h5>
					  Book Delete Success!
					</div>";
}
else{
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Error!
                </div>";
}
?>