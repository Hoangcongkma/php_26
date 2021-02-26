<?php
function kiem_tra_chuoi_palindrome($string)   
{  
  if ($string == strrev($string))  
  return 1;  
  else  
  return 0;  
}  
echo kiem_tra_chuoi_palindrome('ZenttneZ')."<br>";
?>
<!-- trả vè 1 là giá trị đúng , trả về 0 là giá trị sai -->
