<?php
session_start();


function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
    $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
    $flag = true;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $error_arr =array();

    if (file_exists($target_file)) {
        $error_arr[] = "File đã tồn tại";
        $flag = false;
    }

    if ($_FILES[$input_name]["size"] > $max_size) {
        $error_arr[] = "Dung lượng file quá lớn";
        $flag = false;
    }

    if(!in_array($imageFileType, $formats_allowed_array)) {
        $error_arr[] = "Chỉ file ".implode(array_values($formats_allowed_array),',')." được chấp nhận.";
        $flag = false;
    }

    if ($flag == false) {
        $error_arr[] = "Upload thất bại";
    } else {
        if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
            return $_FILES[$input_name]["name"];
        } else {
            $error_arr[] = "Lỗi";
        }
    }
    return $error_arr;
}

if(isset($_POST['submit'])){
    $uploads = file_upload("file_uploads","images",500000,array('jpg', 'JPG', 'png'));
    
    if(gettype($uploads) == "array"){
        print_r($uploads);

    }else{
        echo "File name is: " . $uploads;
        $document = [
            'name' => $_POST['docname'],
            'file_name' => basename($_FILES['images']['name'])
        ];
        $_SESSION['document'][] = $document;
        header('Location: document-list.php');
    }
}