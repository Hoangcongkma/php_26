<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <hr>
        <form action="index.php?mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
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
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $post['thumbnail']?>">
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
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>