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
        <h3 align="center">Add New Post</h3>
        <hr>
        <form action="?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <select class="form-control form-control-sm" name="category_id" >
                <option >Chọn danh mục ...</option>
                <option value="1">Thời sự</option>
                <option value="2">Tin trong nước</option>
                <option value="4">Văn hóa - Xã hội</option>
                <option value="5">Công nghệ</option>
                <option value="6">Tin tức lập trình</option>
                <option value="7">Tin tức công nghệ </option>
                <option value="15">Tin Thế Giới</option>
          </select>
          <br>
          <div class="form-group" s>
            <label for="">Content</label>
            <textarea class="form-control" id="" rows="15" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="date" class="form-control" id="" placeholder="" name="created_at">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</body>
</html>