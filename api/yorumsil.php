<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "DELETE") {
 

    
    $row = $db->exec("delete from yorum WHERE id=".$_GET["id"]);
    
    if($row > 0)
    {
         $_code = 200;
         $jsonArray["hata"] = false; 
         $jsonArray["mesaj"] = "Yorum Silindi";
    }
    else
    {
        $_code = 200;
         $jsonArray["hata"] = true; 
         $jsonArray["hataMesaj"] = "Sistemsel hata";
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