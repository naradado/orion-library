<?php
include('dbconnection.php');
if (isset($_GET['id'])){
	$id=$_GET['id'];
}
else{
	$id=1;
}

$sql_getbook="SELECT * FROM tbl_book WHERE book_id=$id";
$res_getbook=mysqli_query($conn,$sql_getbook);
$row_getbook=mysqli_fetch_array($res_getbook);
$auther_id=$row_getbook['book_author'];
$pub_id=$row_getbook['book_publisher'];
$cat_id=$row_getbook['book_cat'];
?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Book</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
				<div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Name</label>
                    <input type="text" class="form-control" id="bookname" value="<?php echo $row_getbook['book_name']; ?>" placeholder="Enter Book Name">
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">ISBN</label>
                    <input type="text" class="form-control" id="isbn" value="<?php echo $row_getbook['book_isbn']; ?>" placeholder="ISBN">
                  </div>
				</div>
				</div>
				<div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Author</label>
                    <select class="form-control" id="author">
						<option value="0" <?php if($auther_id==0){ echo "selected";}?>>Select Author</option>
						<option value="1" <?php if($auther_id==1){ echo "selected";}?>>Mr. Martin Wicramasinghe</option>
						<option value="2" <?php if($auther_id==2){ echo "selected";}?>>Mr. ABC Perera</option>
						<option value="3" <?php if($auther_id==3){ echo "selected";}?>>Mrs. BCD Silva</option>
					</select>
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Publisher</label>
                    <select class="form-control" id="publisher">
						<option value="0" <?php if($pub_id==0){ echo "selected";}?>>Select Publisher</option>
						<option value="4" <?php if($pub_id==4){ echo "selected";}?>>MD Gunasena</option>
						<option value="5" <?php if($pub_id==5){ echo "selected";}?>>Sarasavi</option>
						<option value="6" <?php if($pub_id==6){ echo "selected";}?>>Author</option>
					</select>
                  </div>
				</div>
				</div>
				
				<div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Category</label>
                    <select class="form-control" id="book_cat">
					<option value="0">Select Category</option>
					<?php
					$sql_bookcat="SELECT * FROM tbl_bookcat";
					$res_bookcat=mysqli_query($conn,$sql_bookcat);
					while($row_bookcat=mysqli_fetch_array($res_bookcat)){
					?>
						
						<option value="<?php echo $row_bookcat['cat_id']; ?>" <?php if($cat_id==$row_bookcat['cat_id']){ echo "selected";}?>><?php echo $row_bookcat['cat_name']; ?></option>
					
					
					<?php } ?>
					</select>
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Price</label>
                    <input type="text" class="form-control" id="price" value="<?php echo $row_getbook['book_price']; ?>" placeholder="Price">
                  </div>
				</div>
				</div>
                <div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Printed Date</label>
                    <input type="date" class="form-control" id="bpd" value="<?php echo $row_getbook['book_print_date']; ?>" placeholder="">
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Added Date</label>
                    <input type="date" class="form-control" id="bad" value="<?php echo $row_getbook['book_add_date']; ?>" placeholder="">
                  </div>
				</div>
				</div>
				<div class="row">
				<div class="col-12">
				<div id="result"></div>
				</div>
				</div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="updatebook_btn" class="btn btn-primary">Update Book</button>
                </div>
              </form>
            </div>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#updatebook_btn").click(function(){
		$.post(
			"actions/update_book.php",
			{
			book_id:<?php echo $id;?>,
			book_name:$('#bookname').val(),
			isbn:$('#isbn').val(),
			author:$('#author').val(),
			publisher:$('#publisher').val(),
			book_cat:$('#book_cat').val(),
			book_price:$('#price').val(),
			book_bd:$('#bpd').val(),
			book_ad:$('#bad').val()
			},
			function (data){
			$('#result').html(data);
			
			});
	});
});
</script>