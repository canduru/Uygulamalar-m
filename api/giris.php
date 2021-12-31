<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "GET") {
 

    $sifre = addslashes($_GET["sifre"]);
    $email = addslashes($_GET["email"]);
    
    $uyeler = $db->query("SELECT * from kullanici WHERE email='{$email}' and sifre='{$sifre}'")->fetch(PDO::FETCH_ASSOC);
    
    if(empty($sifre) || empty($email)) {
	    	$_code = 400; 
	 		$jsonArray["hata"] = TRUE; 
	        $jsonArray["hataMesaj"] = "Boş Alan Bırakmayınız.";
	 }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    	$_code = 400;
        $jsonArray["hata"] = TRUE; 
        $jsonArray["hataMesaj"] = "Geçersiz E-email Adresi"; 
    }else if($uyeler) {
    	$_code = 200;
        $jsonArray["hata"] = false;
        $_SESSION["kID"] = $uyeler["id"];
        $_SESSION["kAD"] = $uyeler["ad"] . " " . $uyeler["soyad"];
        $_SESSION["kResim"] = $uyeler["resim"];
	     $jsonArray["hataMesaj"] = "";
    }else {
		 $_code = 200;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Email / şifre hatalı";
	 
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