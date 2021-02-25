<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "demo2");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['thumbnail']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO categories (thumbnail) VALUES ('$image')";
    // execute query
    mysqli_query($db, $sql);
  }
  $result = mysqli_query($db, "SELECT * FROM categories");
?>