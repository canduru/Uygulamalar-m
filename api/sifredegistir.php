<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200;  
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "PUT") {
 
 
    $sifre = addslashes($_GET["sifre"]);
    $k_id = $_SESSION["kID"];
    
    
     
	 $ex = $db->exec("update kullanici set sifre=".$sifre." where id=".$k_id); 
		 
	 if($ex) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "Şifre Başarıyla değiştirildi.";
	 }else {
		 $_code = 400;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Sistem Hatası.";
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