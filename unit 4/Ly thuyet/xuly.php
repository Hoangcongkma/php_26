<?php

if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        
        $target_dir = ".../uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
    }

    ?>