
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
				<div class="row">
				<div class="col-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Current Password</label>
                    <input type="password" class="form-control" id="cur_pw">
                  </div>
				</div>
				<div class="col-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" id="new_pw">
                  </div>
				</div>
				<div class="col-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm new Password</label>
                    <input type="password" class="form-control" id="new_confirm_pw">
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
                  <button type="button" id="ch_pw_btn" class="btn btn-primary">Change Password</button>
                </div>
              </form>
            </div>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#ch_pw_btn").click(function(){
		$.post(
			"actions/change_pw.php",
			{
			current_pw:$('#cur_pw').val(),
			new_pw:$('#new_pw').val(),
			new_confirm_pw:$('#new_confirm_pw').val(),
			},
			function (data){
			$('#result').html(data);
			$('#cur_pw').val("");
			});
	});
});
</script>