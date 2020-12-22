<?php
$string = "a-b-c-d";
echo $string . '=>';
$data = explode("-", $string);

$new_string = implode(",", $data);
echo $new_string;
 // var_dump($data);

 ?>