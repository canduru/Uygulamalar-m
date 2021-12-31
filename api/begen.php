<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200;  
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "POST") {
 
 
    $tid = addslashes($_POST["tid"]);
    $d = addslashes($_GET["d"]);
    $k_id = $_SESSION["kID"];
    
    $b1 = 0;
    $b2 = 0;

    if($d == "l")
    	$b1 = 1;
    else 
    	$b2 = 1;
     
	 $ex = $db->exec("INSERT INTO begeni (k_id,t_id,begen,begenme) values (".$k_id.",".$tid.",".$b1.",".$b2.")"); 
		 
	 if($ex) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "işlem Başarılı.";
	 }else {
		 $_code = 400;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Sistem Hatası.";
	 }
	
}
else if($_SERVER['REQUEST_METHOD'] == "DELETE") {
 
 
    $tid = addslashes($_GET["tid"]);
    $k_id = $_SESSION["kID"];
    
    
     
	 $ex = $db->exec("delete from begeni where k_id = '{$k_id}' and t_id = '{$tid}'");
		 
	 if($ex > 0) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "işlem Başarılı.";
	 }else {
		 $_code = 400;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Sistem Hatası.";
	 }
	
}
else if($_SERVER['REQUEST_METHOD'] == "PUT") {
 
 
    $tid = addslashes($_GET["tid"]);
    $d = addslashes($_GET["d"]);
    $k_id = $_SESSION["kID"];
    
    $b1 = 0;
    $b2 = 0;

    if($d == "l")
    	$b1 = 1;
    else 
    	$b2 = 1;
    
     
	 $ex = $db->exec("update begeni set begen=".$b1.",begenme=".$b2." where k_id=".$k_id." and t_id=".$tid); 
		 
	 if($ex) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "işlem Başarılı.";
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