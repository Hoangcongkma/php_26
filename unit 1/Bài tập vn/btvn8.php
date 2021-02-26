<?php
for($i = 7; $i >= 1; $i --) {
    for(($j = 7- $i); $j >= 1; $j --) {
        echo " <span>&nbsp&nbsp&nbsp";
    }
    for(($j = $i);$j>=1;$j--){
    	echo"##";

    }
 echo "<br>";
}
?>