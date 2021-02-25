<div class="modal fade" id="modal-login">
	<div class="modal-dialog">
		<form id="login" method="POST" role="form" class="form-horizontal">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<p class="text-center" id="placeholder_log"></p>
					<p class="text-center text-danger" id="err_log"></p>
					
					<div class="form-group">
						<label class="col-md-4 control-label">Username</label>
						<div class="col-md-6">
							<input type="text" name="username" id="username_log" class="form-control">
							<span class="help-block">
								<strong class="text-danger" id="err_username_log"></strong>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" name="password" id="password_log" class="form-control">
							<span class="help-block">
								<strong class="text-danger" id="err_password_log"></strong>
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" id="remember_log"> Remember me
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-times"></i> Close
					</button>
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-lock"></i> Login
					</button>
				</div>
			</div>
		</form>
	</div>
</div>