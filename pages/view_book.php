<div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Publisher</th>
					<th>Category</th>
					<th>Price</th>
					<th>Printed Date</th>
					<th>Added Date</th>
					<th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php
				  include('dbconnection.php');
				  $sql_getbooks="SELECT * FROM tbl_book";
				  $res_getbooks=mysqli_query($conn,$sql_getbooks);
				  while($row_books=mysqli_fetch_array($res_getbooks)){
					  $book_cat=$row_books['book_cat'];
					  $sql_bookcat="SELECT * FROM tbl_bookcat WHERE cat_id=$book_cat";
					  $res_bookcat=mysqli_query($conn,$sql_bookcat);
					  $row_bookcat=mysqli_fetch_array($res_bookcat);
				  ?>
                  <tr>
                    <td><?php echo $row_books['book_id']; ?></td>
                    <td><?php echo $row_books['book_name']; ?></td>
                    <td><?php echo $row_books['book_isbn']; ?></td>
                    <td><?php echo $row_books['book_author']; ?></td>
                    <td><?php echo $row_books['book_publisher']; ?></td>
					<td><?php echo $row_bookcat['cat_name']; ?></td>
					<td><?php echo $row_books['book_price']; ?></td>
					<td><?php echo $row_books['book_print_date']; ?></td>
					<td><?php echo $row_books['book_add_date']; ?></td>
					<td>
					<?php if(($roll_id==2)OR($roll_id==1)){?>
					<button class="btn btn-secondary editbookbtn" id="<?php echo $row_books['book_id']; ?>">EDIT</button>
					<?php } ?>
					<?php if($roll_id==1){?>
					<button class="btn btn-warning delbookbtn" data-toggle="modal" data-target="#modal-default" id="<?php echo $row_books['book_id']; ?>">DELETE</button>
					<?php } ?>
					</td>
                  </tr>
				  <?php } ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>Book ID</th>
                    <th>Book Name</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Publisher</th>
					<th>Category</th>
					<th>Price</th>
					<th>Printed Date</th>
					<th>Added Date</th>
					<th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
			  <div id="result"></div>
			  
			   <div class="modal fade" id="modal-default">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h4 class="modal-title">Delete Book</h4>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
					  <p>Are you sure want to delete this Book?</p>
					   <button type="button" class="btn btn-primary" id="yesbtn">Yes</button>
					   <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					  
					</div>
				   
				  </div>
				  <!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			  </div>
              <!-- /.card-body -->
			  
			  
            </div>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$(".editbookbtn").click(function(event){
		var book_id=this.id;
		window.location.href = "index.php?page=update-book&id="+book_id;
	});
	
	$(".delbookbtn").click(function(event){
		var book_id=this.id;
		$("#yesbtn").click(function(event){
			$.post(
			"actions/delete_book.php",
			{
			book_id:book_id,
			},
			function (data){
			$('#result').html(data);
			window.location.href = "index.php?page=view-book";
			});
		});
	});
});
</script>

