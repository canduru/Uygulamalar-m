<?php 
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); // array değişkenimiz bunu en alta json objesine çevireceğiz. 
$jsonArray["hata"] = FALSE; // Başlangıçta hata yok olarak kabul edelim. 
 
$_code = 200; // HTTP Ok olarak durumu kabul edelim. 
$_method = $_SERVER["REQUEST_METHOD"]; // client tarafından bize gelen method
// aldığımız işlem değişkenine göre işlemler yapalım. 
if($_SERVER['REQUEST_METHOD'] == "POST") {
 
 // verilerimizi post yöntemi ile alalım. 
    $ad = addslashes($_POST["ad"]);
    $soyad = addslashes($_POST["soyad"]);
    $sifre = addslashes($_POST["sifre"]);
    $email = addslashes($_POST["email"]);
    $telefon = addslashes($_POST["telefon"]);
    
    // Kontrollerimizi yapalım.
    // gelen kullanıcı adı veya e-email veri tabanında kayıtlı mı kontrol edelim. 
    $uyeler = $db->query("SELECT * from kullanici WHERE email='{$email}'");
    
    if(empty($ad) || empty($soyad) || empty($sifre) || empty($email) || empty($telefon)) {
	    	$_code = 400; 
	 		$jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
	        $jsonArray["hataMesaj"] = "Boş Alan Bırakmayınız."; // Hatanın neden kaynaklı olduğu belirtilsin.
	 }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    	$_code = 400;
        $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
        $jsonArray["hataMesaj"] = "Geçersiz E-email Adresi"; // Hatanın neden kaynaklı olduğu belirtilsin. 
    }/*else if($uyeler->rowCount() !=0) {
    	$_code = 400;
        $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
        $jsonArray["hataMesaj"] = "Kullanıcı Adı Veya E-email Alınmış."; 
    }*/else {
		 $ex = $db->prepare("INSERT INTO kullanici set  
		 ad= :kadi, 
		 soyad= :ads, 
		 sifre= :pass, 
		 email= :mail, 
		 telefon= :tlf");
		 $ekle = $ex->execute(array(
			 "kadi" => $ad,
			 "ads" => $soyad,
			 "pass" => $sifre,
			 "mail" => $email,
			 "tlf" => $telefon
		 
 		));
	 if($ekle) {
		 $_code = 201;
		 $jsonArray["mesaj"] = "Ekleme Başarılı.";
	 }else {
		 $_code = 400;
		 $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
	     $jsonArray["hataMesaj"] = "Sistem Hatası.";
	 }
	}
}
else {
    // hatalı bir parametre girilmesi durumunda burası çalışacak. 
    $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
    $jsonArray["hataMesaj"] = "Girilen İşlem Bulunmuyor."; // Hatanın neden kaynaklı olduğu belirtilsin. 
}
 
SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
echo json_encode($jsonArray);
 ?>