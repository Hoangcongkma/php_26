
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                         <div class="container" style="width: 100%">
                            <h3 align="center">Update Category</h3>
                            <hr>
                                <form action="index.php?type=backend&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Parent ID</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?php echo $category['parent_id']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Thumbnail</label>
                                        <div class="cate">
                                                <?php echo "<img src='images/category/".$category['thumbnail']."' >"; ?>
                                                <input type="hidden" name="thumbnail1" value="<?php echo $category['thumbnail']?>">        
                                        </div>
                                        <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
                                    </div>
                                     <div class="form-group">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $category['slug']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="description"  value="<?php echo $category['description']?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="">Created At</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="created_at"  value="<?php echo $category['created_at']?>">
                                    </div>
                                    <button style="margin-bottom: 30px" type="submit" name="upload" class="btn btn-primary">Create</button>
                                </form>
                            </div>    
                        </div>
                    </div>         
</div>
<?php require_once('views/backend/includes/footer.php') ?>                        