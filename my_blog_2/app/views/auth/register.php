<div class="modal fade" id="modal-register">
	<div class="modal-dialog">
		<form id="register" method="POST" role="form" class="form-horizontal">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Register</h4>
				</div>
				<div class="modal-body">
					<p class="text-center" id="placeholder_reg"></p>
					<p class="text-center text-danger" id="err_reg"></p>
					
					<div class="form-group">
						<label class="col-md-4 control-label">Username</label>
						<div class="col-md-6">
							<input type="text" name="username" id="username_reg" class="form-control">
							<span class="help-block">
								<strong class="text-danger" id="err_username_reg"></strong>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Email</label>
						<div class="col-md-6">
							<input type="text" name="email" id="email_reg" class="form-control">
							<span class="help-block">
								<strong class="text-danger" id="err_email_reg"></strong>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" name="password" id="password_reg" class="form-control">
							<span class="help-block">
								<strong class="text-danger" id="err_password_reg"></strong>
							</span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-times"></i> Close
					</button>
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-user"></i> Register
					</button>
				</div>
			</div>
		</form>
	</div>
</div>