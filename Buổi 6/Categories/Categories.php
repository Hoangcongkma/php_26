<?php 
    require_once "connect.php";

    // var_dump($conn);

    $query = "SELECT * FROM categories";

    $result = $conn->query($query);

    $categories = array();

    while ($row = $result->fetch_assoc()) {
        $categories[]= $row;
    }

    // var_dump($categories)
    // foreach ($categories as $item)
 //     // echo "<pre>";
 //     //      print_r($item);
 //     // echo "</pre>";
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
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="Category_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php foreach ($categories as $item){ ?>
            
            <tr>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['name']?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td><?php echo $item['description']?></td>
                <td>
                    <a href="category_detail.php?id= <?php echo $item['id']?>" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <!-- <tr>
                <td>2</td>
                <td>Bóng đá</td>
                <td>
                    <img src="https://image.thanhnien.vn/660/uploaded/quangtuyen/2019_03_05/u23tuanlinh_fpjh.jpg" width="100px" height="100px">
                </td>
                <td>Tin về bóng đá</td>
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr> -->

        <?php } ?>
        </table>
    </div>
</body>
</html>