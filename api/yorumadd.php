<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200;  
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "POST") {
 
 
    $yorum = addslashes($_GET["yorum"]);
    $tid = addslashes($_GET["id"]);
    

    
    
    if(empty($yorum)) {
	    	$_code = 400; 
	 		$jsonArray["hata"] = TRUE; 
	        $jsonArray["hataMesaj"] = "Boş Alan Bırakmayınız."; 
	 }
   else {
		 $ex = $db->prepare("INSERT INTO yorum set  
		 k_id= :kid, 
		 t_id= :tid, 
		 yorum= :syorum");
		 $ekle = $ex->execute(array(
			 "kid" => $_SESSION["kID"],
			 "tid" => $tid,
			 "syorum" => $yorum
		 
 		));
	 if($ekle) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "Yorum Başarılı.";
	 }else {
		 $_code = 400;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Sistem Hatası.";
	 }
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