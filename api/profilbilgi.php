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
    
            

            $s1 = $db->query("SELECT count(*) as sayi FROM `begeni`,`tarif` WHERE `begeni`.`t_id` = `tarif`.`id` and `begeni`.begen = 1 and `tarif`.`k_id` = '{$k_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $jsonArray["begen"] = $s1["sayi"];
            else
                $jsonArray["begen"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `begeni`,`tarif` WHERE `begeni`.`t_id` = `tarif`.`id` and `begeni`.begenme = 1 and `tarif`.`k_id` = '{$k_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $jsonArray["begenme"] = $s1["sayi"];
            else
                $jsonArray["begenme"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `yorum`,`tarif` WHERE `yorum`.`t_id` = `tarif`.`id` and `tarif`.`k_id` = '{$k_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $jsonArray["yorum"] = $s1["sayi"];
            else
                $jsonArray["yorum"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `tarif` WHERE `tarif`.`k_id` = '{$k_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $jsonArray["paylasim"] = $s1["sayi"];
            else
                $jsonArray["paylasim"] = 0;
           
        
          $jsonArray["hata"] = false; 
    
}
else { 
    $jsonArray["hata"] = TRUE; 
    $jsonArray["hataMesaj"] = "Girilen İşlem Bulunmuyor."; 
}
 
SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
echo json_encode($jsonArray);
 ?>