<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
$jsonArray["hataMesaj"] = "Ekleme Başarısız"; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 
if($_SERVER['REQUEST_METHOD'] == "POST") {

	$sayi = mt_rand(100000,999999);
	$sayi2 = mt_rand(100000,999999);

	if ($_FILES["dosya"]) {

  		$yol = "images/";

	  	$dosyaisimleri = $yol  . "n" .$sayi . "n" .$sayi2."n";
	  	$yuklemeYeri =  $dosyaisimleri. $_FILES["dosya"]["name"];
	 
	  	if ( file_exists($yuklemeYeri) ) {

	     	$jsonArray["hata"] = TRUE; 
    		$jsonArray["hataMesaj"] = "Dosya daha önceden yüklenmiş"; 

	  	} 
	  	else {

        	if ($_FILES["dosya"]["size"]  > 10000000) {
            	$jsonArray["hata"] = TRUE; 
    			$jsonArray["hataMesaj"] = "Dosya boyutu sınırı aşıldı"; 
   			} 
   			else {
          		$dosyaUzantisi = pathinfo($_FILES["dosya"]["name"], PATHINFO_EXTENSION);

            	if ($dosyaUzantisi != "JPG" && $dosyaUzantisi != "jpg" && $dosyaUzantisi != "png") { # Dosya uzantı kontrolü

	            	$jsonArray["hata"] = TRUE; 
	    			$jsonArray["hataMesaj"] = "Sadece jpg ve png uzantılı dosyalar yüklenebilir."; 

          		} else {

              
		            $konum = "../".$yuklemeYeri;
		            $url = $_FILES["dosya"]["tmp_name"];
		            touch($konum);//belirlediğimiz yerde dosyayı oluştur.
		            $al=file_get_contents($url);//belirlediğimiz resimin kaynağını al
		            $kaydet=file_put_contents($konum,$al);//oluşturduğumuz dosyanın içine yaz

           			if($kaydet){//eğer yazma başarılı ise
              				
							$k_id = $_SESSION["kID"];
					    
              				$ex = $db->exec("update kullanici set resim='{$yuklemeYeri}' where id= '{$k_id}'");
							
							 
								 $_code = 200;
								 $jsonArray["mesaj"] = "resim güncellendi.";
							 
						 


		            }else{
						 $_code = 400;
						 $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
					     $jsonArray["hataMesaj"] = "Sistem Hatası.";
		            }

          		}

      		}

  		}

		} else {

	  		$jsonArray["hata"] = TRUE; 
	    	$jsonArray["hataMesaj"] = "Lütfen bir dosya seçin"; 
		}

}
else {
    // hatalı bir parametre girilmesi durumunda burası çalışacak. 
    $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
    $jsonArray["hataMesaj"] = "Girilen İşlem Bulunmuyor."; // Hatanın neden kaynaklı olduğu belirtilsin. 
}
 
SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
if ($jsonArray["hata"]) {
	echo "Resminiz Yüklendi";
	header("Refresh: 3; url=../index.php?s=kullaniciBilgi");
}
else
{
	echo $jsonArray["mesaj"];
	header("Refresh: 3; url=../index.php?s=kullaniciBilgi");
}	
 ?>