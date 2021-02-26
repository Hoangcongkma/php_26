
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                         <div class="container" style="width: 100%">
                            <h3 align="center">Update User</h3>
                            <hr>
                                <form action="index.php?type=backend&mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
                                   <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Thumbnail</label>
                                        <div class="post">
                                                <?php echo "<img src='images/post/".$post['thumbnail']."' >"; ?>
                                                <input type="hidden" name="thumbnail1" value="<?php echo $post['thumbnail']?>">     
                                        </div>
                                        <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Content</label>
                                        <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder=""><?php echo $post['content'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="slug"  value="<?php echo $post['slug']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tag</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="tag"  value="<?php echo $post['tag']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">View Count</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?php echo $post['view_count']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category ID</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="category_id"  value="<?php echo $post['category_id']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">User ID</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="user_id"  value="<?php echo $post['user_id']?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="">Created At</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="created_at"  value="<?php echo $post['created_at']?>">
                                    </div>
                                    <button style="margin-bottom: 30px" type="submit" name="upload" class="btn btn-primary">Create</button>
                                </form>
                            </div>    
                        </div>
                    </div>         
</div>
<?php require_once('views/backend/includes/footer.php') ?>                        