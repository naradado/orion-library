<?php
$book_name=$_POST['book_name'];
$isbn=$_POST['isbn'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$book_cat=$_POST['book_cat'];
$book_price=$_POST['book_price'];
$book_bd=$_POST['book_bd'];
$book_ad=$_POST['book_ad'];

if($book_name==""){
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Required! Book Name.
                </div>";
}
elseif($author==0){
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Required! Author.
                </div>";
}
elseif($publisher==0){
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Required! Publisher.
                </div>";
}
elseif($book_cat==0){
	echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Alert!</h5>
                  Required! Book Category.
                </div>";
}
else{
	include('../dbconnection.php');
	$sql_addbook="INSERT INTO tbl_book(book_name, book_isbn, book_author, book_publisher,book_cat,book_price, book_print_date, book_add_date) 
	VALUES ('$book_name','$isbn',$author,$publisher,$book_cat,'$book_price','$book_bd','$book_ad')";
	if(mysqli_query($conn,$sql_addbook)){
		echo "<div class='alert alert-success alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h5><i class='icon fas fa-check'></i> Alert!</h5>
					  Book Registration Success!
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
}


?>