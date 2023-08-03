<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Book</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
				<div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Name</label>
                    <input type="text" class="form-control" id="bookname" placeholder="Enter Book Name">
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">ISBN</label>
                    <input type="text" class="form-control" id="isbn" placeholder="ISBN">
                  </div>
				</div>
				</div>
				<div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Author</label>
                    <select class="form-control" id="author">
						<option value="0">Select Author</option>
						<option value="1">Mr. Martin Wicramasinghe</option>
						<option value="2">Mr. ABC Perera</option>
						<option value="3">Mrs. BCD Silva</option>
					</select>
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Publisher</label>
                    <select class="form-control" id="publisher">
						<option value="0">Select Publisher</option>
						<option value="4">MD Gunasena</option>
						<option value="5">Sarasavi</option>
						<option value="6">Author</option>
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
					include('dbconnection.php');
					$sql_bookcat="SELECT * FROM tbl_bookcat";
					$res_bookcat=mysqli_query($conn,$sql_bookcat);
					while($row_bookcat=mysqli_fetch_array($res_bookcat)){
					?>
						
						<option value="<?php echo $row_bookcat['cat_id']; ?>"><?php echo $row_bookcat['cat_name']; ?></option>
					
					
					<?php } ?>
					</select>
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Price">
                  </div>
				</div>
				</div>
                <div class="row">
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Printed Date</label>
                    <input type="date" class="form-control" id="bpd" placeholder="">
                  </div>
				</div>
				<div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Added Date</label>
                    <input type="date" class="form-control" id="bad" placeholder="">
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
                  <button type="button" id="addbook_btn" class="btn btn-primary">Add Book</button>
                </div>
              </form>
            </div>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#addbook_btn").click(function(){
		$.post(
			"actions/add_book.php",
			{
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