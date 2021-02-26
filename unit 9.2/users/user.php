<?php 
	// Thong so ket noi CSDL
require_once('../helper/User.php');
// Câu lệnh truy vấn
$user = new User();
$users = $user->getList();

?>
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
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New User</a>
        <table class="table">
            <?php if (isset($_COOKIE['add_new'])) { ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $_COOKIE['add_new'] ?>
                </div>
            <?php } ?>
            <?php if (isset($_COOKIE['update'])) { ?>
                <div class="alert alert-info" role="alert">
                  <?php echo $_COOKIE['update'] ?>
                </div>
            <?php } ?>
            <?php if (isset($_COOKIE['delete'])) { ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_COOKIE['delete'] ?>
                </div>
            <?php } ?>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Action</th>
            </thead>
            <?php foreach ($users as  $value) { ?>
            	<tr>
            	<td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['avatar']; ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
                    <a href="user_edit.php?id=<?php echo $value['id']?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
                </td>
            	</tr>
            <?php } ?>	
        </table>
    </div>
</body>
</html>