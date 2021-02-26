<div id="title">
        <div class="title-text">
        	<b class="glyphicon glyphicon-earphone">Hotline:0359756737</b>
        </div>
        <!--end title-text-->
        <div class="title-text2">
        	<p style="color:blue">Welcome to my blog<p>
        </div>
        <!--end title-text2-->
		<div class="title-text3">
        	<a href="admin/index.php" style=" text-decoration:none;"><p>My Home </p></a>
           
        </div>
        <!--end title-text3-->
        <div class="title-text4">
        	<form action="" method="GET">
            	<input type="text"  name="q" value="" placeholder="Bạn muốn tìm gì?"/>
                <input type="hidden" name="p" value="timkiem">
                <input type="submit" name="" value="Tìm kiếm" />
                </form>
                <form action="" method="POST">
					<?php
						if(!isset($_SESSION["idUser"])){
							require "blocks/formlogin.php";
							}else{
								require"blocks/formhello.php";
								}

                    ?>
                </form>
           <!--end form-->
        </div>
  <!--end title-text4-->
    </div><!--end title-->
