<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="index.php?mod=post&act=list" class="btn btn-primary">Back POSTs</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Content</th>
                <th>View</th>
                <th>Category</th>
                <th>User</th>
                <th>Release</th>
            </thead>
            	<tr>
                	<td><?php echo $post['id'] ?></td>
                    <td style="width: 300px"><?php echo $post['title'] ?></td>
                    <td><?php echo $post['thumbnail']; ?></td>
                    <td><p style="width:500px; height: 300px; overflow: auto;"><?php echo $post['content']?></p></td>
                    <td><?php echo $post['view_count']; ?></td>
                    <td><?php echo $category_name['name']; ?></td>
                    <td><?php echo $user_name['name']; ?></td>
                    <td><?php echo $post['created_at']; ?></td>
            	</tr>
        </table>
    </div>
</body>
</html>