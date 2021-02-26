
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                      	<div class="container" style="width: 100%">
                      		<h3 align="center">DevMind - Education And Technology Group</h3>
							    <h3 align="center">Add New Post</h3>
							    <hr>
                        	 <form action="index.php?type=backend&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
					             <div class="form-group">
						                <label for="">ID</label>
						                <input type="text" class="form-control" id="" placeholder="" name="id">
						            </div>
						            <div class="form-group">
						                <label for="">Title</label>
						                <input type="text" class="form-control" id="" placeholder="" name="title">
						            </div>
						            <div class="form-group">
						                <label for="">Description</label>
						                <input type="text" class="form-control" id="" placeholder="" name="description">
						            </div>
						            <div class="form-group">
						                <label for="">Thumbnail</label>
						                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
						            </div>
						            <div class="form-group">
						                <label for="">Content</label>
						                <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder=""></textarea>
						            </div>
						            <div class="form-group">
						                <label for="">Slug</label>
						                <input type="text" class="form-control" id="" placeholder="" name="slug">
						            </div>
						            <div class="form-group">
						                <label for="">Tag</label>
						                <input type="text" class="form-control" id="" placeholder="" name="tag">
						            </div>
						            <div class="form-group">
						                <label for="">View Count</label>
						                <input type="text" class="form-control" id="" placeholder="" name="view_count">
						            </div>
						            <div class="form-group">
						                <label for="">Category ID</label>
						                <input type="text" class="form-control" id="" placeholder="" name="category_id">
						            </div>
						            <div class="form-group">
						                <label for="">User ID</label>
						                <input type="text" class="form-control" id="" placeholder="" name="user_id">
						            </div>
						            <div class="form-group">
						                <label for="">Created At</label>
						                <input type="text" class="form-control" id="" placeholder="" name="created_at">
						            </div>
							    <button style="margin-bottom: 30px" type="submit" name="upload" class="btn btn-primary">Create</button>
							 </form>
                           </div>
                       </div>
                    </div>         
</div>
<?php require_once('views/backend/includes/footer.php') ?>                        