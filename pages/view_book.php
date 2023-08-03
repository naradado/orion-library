<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
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
					<td><button class="btn btn-secondary">EDIT</button></td>
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
              <!-- /.card-body -->
            </div>
<script src="plugins/jquery/jquery.min.js"></script>
