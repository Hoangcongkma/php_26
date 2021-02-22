<div class="container-fluid">
	<div class="row">
		<div class="col-md">
			<div class="card">
				<div class="card-header card-header-primary">
					<h4 class="card-title">Chỉnh sửa bài viết</h4>
					<!-- <p class="card-category">Complete your profile</p> -->
				</div>
				<div class="card-body">
					<form action="?mod=admin&act=update&c=post&id=<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label class="bmd-label-floating">Tiêu đề</label>
									<input type="text" class="form-control" name="title" value="<?php echo $data['title'];?>">
									<input type="hidden" name="id" value="<?php echo $data['id'];?>">
									<div class="invalid-feedback">
										Vui lòng nhập tiêu đề.
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="bmd-label-floating">Mô tả</label>
									<input type="text" class="form-control" name="description" value="<?php echo $data['description'];?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label class="bmd-label-floating">Ảnh bìa</label>
									<input type="text" class="form-control" name="thumbnail" value="<?php echo $data['thumbnail'];?>">
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label class="bmd-label-floating">Danh mục</label>
									<select  class="form-control" name="category_id">
										<option name="" id="" value="0" >Chọn danh mục ...</option>
										<?php foreach ($category as $key){ ?>
											<option <?php if($data['category_id']==$key['id']) echo "selected"; ?> value="<?php echo $key['id'];?>" >
												
												<?= $key['name']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nội dung</label>
									<div class="form-group">
										<textarea class="form-control" name="content" row=10 value="<?php echo $data['content'];?>"></textarea>
										<script type="text/javascript">
											CKEDITOR.replace('content');
										</script>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>