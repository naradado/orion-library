<?php
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$isbn=$_POST['isbn'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$book_cat=$_POST['book_cat'];
$book_price=$_POST['book_price'];
$book_bd=$_POST['book_bd'];
$book_ad=$_POST['book_ad'];

include('../dbconnection.php');
$sql_updatebook="Update tbl_book SET book_name='$book_name',book_isbn='$isbn',book_author=$author,book_publisher=$publisher,
book_cat=$book_cat,book_price=$book_price,book_print_date='$book_bd',book_add_date='$book_ad' WHERE book_id=$book_id";
if(mysqli_query($conn,$sql_updatebook)){
	echo "<div class='alert alert-success alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h5><i class='icon fas fa-check'></i> Alert!</h5>
					  Book Update Success!
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