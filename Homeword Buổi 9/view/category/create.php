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
        <h3 align="center">Add New Category</h3>
        <hr>
        <form action="?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
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
            <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" id="" placeholder="" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>