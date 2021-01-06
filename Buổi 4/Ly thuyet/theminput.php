<div class="form-group">
    <label for="">Ảnh</label>
    <input type="file" class="form-control" name="ANH_SP">
</div>
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="ANH_SP" id="ANH_SP">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php

if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        
        $target_dir = "uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
    }
if (file_exists($target_file)) {  //kiểm tra xem file đã tồn tại trên sever hay chưa.
    echo "Sorry, file already exists.";
}

if ($_FILES["fileToUpload"]["size"] > 500000) { //kiểm tra xem file có vượt quá dung lượng cho phép hay không.
    echo "Sorry, your file is too large.";
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {//kiểm tra định dạng file có phù hợp hay không?
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
    ?>
