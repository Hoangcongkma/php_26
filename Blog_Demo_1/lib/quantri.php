<?php
//quan ly the loai
function DanhSachTheLoai($conn){
  $sql ="
      SELECT * 
      FROM theloai
	  WHERE AnHien =1
	  ORDER BY idTL DESC;
      
  ";
  return mysqli_query($conn,$sql);
}
function CapNhatSoLanXemTin($conn,$id){
	$sql ="UPDATE tin
			SET SoLanXem=SoLanXem + 1
			WHERE id= '$id'
			";
	mysqli_query($conn,$sql);
	}
function TinXemNhieu($conn){
	$sql = "
		SELECT * 
		FROM tin
		ORDER BY SoLanXem DESC
		LIMIT 0,9
	";
		return mysqli_query($conn,$sql);
	}
function DanhSachTheLoai_admin($conn){
  $sql ="
      SELECT * 
      FROM theloai
	  ORDER BY idTL DESC;
      
  ";
  return mysqli_query($conn,$sql);
}
function ChiTietTheLoai($conn,$idTL){
  $sql ="
      SELECT * 
      FROM theloai
	    WHERE idTL = '$idTL'     
  ";
  return mysqli_query($conn,$sql);
	}
function ChiTietLoaiTin($conn,$idLT){
  $sql ="
      SELECT * 
      FROM loaitin
	  WHERE idLT = '$idLT'     
  ";
  return mysqli_query($conn,$sql);
	}
function chitiettin($conn,$id){
  $sql ="
      SELECT * 
      FROM tin
	  WHERE id = $id
  ";
  return mysqli_query($conn,$sql);
	}
function theloai_loaitin($conn,$idLT){
	$sql = "
		SELECT loaitin.Ten, theloai.TenTL
		FROM theloai,loaitin
		WHERE theloai.idTL = loaitin.idTL
		AND idLT = '$idLT'
	";
	 return mysqli_query($conn,$sql);
	}
function tentheloai($conn,$idTL){
	$sql = "
		SELECT TenTL
		FROM theloai
		WHERE idTL = $idTL
	";
	 return mysqli_query($conn,$sql);
	}
?>
<?php
//quan ly loai tin
function DanhSachLoaiTin($conn){
	$sql = "
		SELECT loaitin.Ten, loaitin.Ten_KhongDau, theloai.TenTL, theloai.TenTL_KhongDau,  loaitin.idLT, loaitin.ThuTu, loaitin.AnHien, loaitin.idTL
		FROM theloai,loaitin
		WHERE theloai.idTL = loaitin.idTL
		ORDER BY idLT DESC
	";
	 return mysqli_query($conn,$sql);
	}

?>
<?php 
function DanhSachTin($conn){
	$sql = "
			SELECT tin.id,tin.TieuDe,tin.TieuDe_KhongDau,tin.TomTat,tin.urlHinh,tin.Ngay,users.Username,tin.Content, theloai.TenTL, loaitin.Ten ,tin.SoLanXem,tin.TinNoiBat,tin.AnHien
			FROM tin, theloai,loaitin,users
			WHERE tin.idTL = theloai.idTL
			AND tin.idLT = loaitin.idLT
			AND tin.idUser = users.idUser
			ORDER BY id DESC
			LIMIT 0,10
	";
			return mysqli_query($conn,$sql);
	}
function tintuc($conn){
	$sql = "
			SELECT *
			FROM tin
			WHERE TinNoiBat = 1
			ORDER BY RAND()
			LIMIT 0,9
	";
			return mysqli_query($conn,$sql);
	}
function tinmoi($conn){
	$sql = "
			SELECT *
			FROM tin
			WHERE AnHien = 1
			ORDER BY id DESC
			LIMIT 0,5
	";
		return mysqli_query($conn,$sql);
	}
function tinlienquan($conn){
	$sql = "
			SELECT Ten
			FROM loaitin
			ORDER BY idLT DESC
			LIMIT 0,9
			
	";
			return mysqli_query($conn,$sql);
	}
function DanhSachTinTheoTheLoai($conn,$idTL){
		$sql = "
			SELECT *
			FROM loaitin
			WHERE idTL = '$idTL'
			LIMIT 0,2
		";
			return mysqli_query($conn,$sql);
	}
function tintrongloai($conn,$idLT){
		$sql = "
			SELECT *
			FROM tin
			WHERE idLT = '$idLT'
		";
			return mysqli_query($conn,$sql);
	}
function tintheotheloai($conn,$idTL){
		$sql = "
			SELECT *
			FROM tin
			WHERE idTL = '$idTL'
			LIMIT 0,5
		";
			return mysqli_query($conn,$sql);
	}
function tintheoloaitin_phantrang($conn,$idLT,$from,$sotinmottrang){
	$sql ="
			SELECT *
			FROM tin
			WHERE idLT = $idLT
			ORDER BY id DESC
			LIMIT $from, $sotinmottrang
	";
	return mysqli_query($conn,$sql);

}
function timkiem($conn,$tukhoa){
	$sql = "
		SELECT *
		FROM tin
		WHERE TieuDe REGEXP '$tukhoa'
		ORDER BY id DESC
	";
	return mysqli_query($conn,$sql);
}
?>
<?php
function stripUnicode($str)
{
    if (!$str) {
        return false;
    }
    $unicode = array('a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ', 'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 'd' => 'đ', 'D' => 'Đ', 'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ', 'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 'i' => 'í|ì|ỉ|ĩ|ị', 'I' => 'Í|Ì|Ỉ|Ĩ|Ị', 'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 'y' => 'ý|ỳ|ỷ|ỹ|ỵ', 'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ', '' => '?', '-' => '/');
    foreach ($unicode as $khongdau => $codau) {
        $arr = explode("|", $codau);
        $str = str_replace($arr, $khongdau, $str);
    }
    return $str;
}
function changeTitle($str)
{
    $str = stripUnicode($str);
    $str = str_replace("?", "", $str);
    $str = str_replace("&", "", $str);
    $str = str_replace("'", "", $str);
    $str = str_replace("  ", " ", $str);
    $str = trim($str);
    $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
    // MB_CASE_UPPER/MB_CASE_TITLE/MB_CASE_LOWER
    $str = str_replace(" ", "-", $str);
    $str = str_replace("---", "-", $str);
    $str = str_replace("--", "-", $str);
    $str = str_replace('"', '', $str);
    $str = str_replace('"', "", $str);
    $str = str_replace(":", "", $str);
    $str = str_replace("(", "", $str);
    $str = str_replace(")", "", $str);
    $str = str_replace(",", "", $str);
    $str = str_replace(".", "", $str);
    $str = str_replace(".", "", $str);
    $str = str_replace(".", "", $str);
    $str = str_replace("%", "", $str);
    return $str;
}

?>