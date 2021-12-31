<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200;  
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "POST") {
 
 
    $kid = addslashes($_POST["kid"]);
    $k_id = $_SESSION["kID"];
    
    
     
	 $ex = $db->prepare("INSERT INTO takip set  
		 k_id= :kid, 
		 t_k_id= :tid");
		 $ekle = $ex->execute(array(
			 "kid" => $k_id,
			 "tid" => $kid
		 
 		));
	 if($ekle) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "Takip Başarılı.";
	 }else {
		 $_code = 400;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Sistem Hatası.";
	 }
	
}
else if($_SERVER['REQUEST_METHOD'] == "DELETE") {
 
 
    $kid = addslashes($_GET["kid"]);
    $k_id = $_SESSION["kID"];
    
    
     
	 $ex = $db->exec("delete from takip where k_id = '{$k_id}' and t_k_id = '{$kid}'");
		 
	 if($ex > 0) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "Takip Bırakıldı.";
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