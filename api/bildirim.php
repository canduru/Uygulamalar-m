<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "GET") {
 

    $k_id = $_SESSION["kID"];
    $sorgu = $db->query("SELECT `bildirim`.`id`,`bildirim`.`islem`,`tarif`.`ad` as tarif,`kullanici`.`ad`,`kullanici`.`soyad` FROM `bildirim`,`kullanici`,`tarif` WHERE `tarif`.`id` = `bildirim`.`t_id` AND `kullanici`.`id` = `bildirim`.`k_id` and `bildirim`.`durum` = 0 and `tarif`.`k_id` = ".$k_id, PDO::FETCH_ASSOC);
   if($sorgu->rowCount()) {
            $veri = array();
    	foreach( $sorgu as $row ){
            $veri[] = $row;  
        }
            $jsonArray["hata"] = false; 
            $jsonArray["veri"] = $veri;
    }else {
		 $_code = 200;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "bildirim yok";
	 
	}
}
else { 
    $jsonArray["hata"] = TRUE; 
    $jsonArray["hataMesaj"] = "Girilen İşlem Bulunmuyor."; 
}
 
SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
echo json_encode($jsonArray);
 ?>