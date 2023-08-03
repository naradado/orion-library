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
                    <select class="form-control" id="author">
						<option value="10">Novals</option>
						<option value="11">Translations</option>
						<option value="12">Etc.</option>
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
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="addbook_btn" class="btn btn-primary">Add Book</button>
                </div>
              </form>
            </div>