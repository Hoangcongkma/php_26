<div class="reply" style="color: #f7c873; font-size: 14px; cursor: pointer;">
							<!-- Button trigger modal -->
								<span data-toggle="modal" data-target="#exampleModal">
								  Reply
								</span>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Thông tin người gửi</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        	<form action="index.php?type=backend&mod=comment&act=store" method="POST">
												<input type="hidden" name="id" value="NULL">
												<input type="hidden" name="parent_id" value="<?php echo $value['id']?>">
												<input type="text" name="user_name" placeholder="Name *">
												<input type="email" name="email" placeholder="E-mail *"><br>
												<textarea  name="content" id="" style="width: 80%" rows="5"></textarea><br>
												<input type="hidden" name="created_at" value="<?php date_default_timezone_set("Asia/Ho_Chi_Minh");
												echo date("Y-m-d h:i:sa"); ?>">
												<input type="hidden" name="post_id" value="<?php echo $_GET['id']?>">
												<input type="hidden" name="like_count" value="NULL">
												<button type="submit" style="margin-top: 30px" class="btn btn-primary">SUBMIT COMMENT</button>
											</form>
								      </div>
								    </div>
								  </div>
								</div>
							<span style="margin-left: 10px;">Like</span>
</div>