<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "GET") {
 

  
    
    $row = $db->query("SELECT * from tarif WHERE id=".$_GET["id"])->fetch(PDO::FETCH_ASSOC);
    
   if($row) {
           
    	
            $veri = array();
            $k_id = $_SESSION["kID"];
            $t_id = $row["id"];
            $gk_id = $row["k_id"];
            $veri["tarif"] = $row;
            $t_k_id = $row["k_id"];
            if($k_id == $row["k_id"])
            {
                $veri["takipet"] = 2;
            }
            else
            {
                $s1 = $db->query("SELECT * FROM `takip` WHERE k_id = '{$k_id}' and t_k_id = '{$t_k_id}'")->fetch(PDO::FETCH_ASSOC);
                if ( $s1 )
                    $veri["takipet"] = 1;
                else
                    $veri["takipet"] = 0;
            }

            $s1 = $db->query("SELECT count(*) as sayi FROM `takip` WHERE t_k_id = '{$t_k_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["takipci"] = $s1["sayi"];
            else
                $veri["takipci"] = 0;

            $s1 = $db->query("SELECT * FROM `begeni` WHERE k_id = '{$k_id}' and t_id='{$t_id}' and begen = 1")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["begend"] = true;
            else
                $veri["begend"] = false;

            $s1 = $db->query("SELECT * FROM `begeni` WHERE k_id = '{$k_id}' and t_id='{$t_id}' and begenme = 1")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["begenmed"] = true;
            else
                $veri["begenmed"] = false;

            $s1 = $db->query("SELECT count(*) as sayi FROM `tarif` WHERE k_id = '{$gk_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["paylasim"] = $s1["sayi"];
            else
                $veri["paylasim"] = 0;

            $s1 = $db->query("SELECT * FROM `kullanici` WHERE id = '{$gk_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                {
                    $veri["kisi"] = $s1["ad"] . " ".$s1["soyad"];
                    $veri["resim"] = $s1["resim"];
                }
            else
                {
                    $veri["kisi"] = "";
                    $veri["resim"] = "";
                }

            $s1 = $db->query("SELECT count(*) as sayi FROM `begeni` WHERE t_id = '{$t_id}' and begen = 1")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["begen"] = $s1["sayi"];
            else
                $veri["begen"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `begeni` WHERE t_id = '{$t_id}' and begenme = 1")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["begenme"] = $s1["sayi"];
            else
                $veri["begenme"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `yorum` WHERE t_id = '{$t_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["yorum"] = $s1["sayi"];
            else
                $veri["yorum"] = 0;

            $s2 = $db->query("SELECT yorum.id,yorum.k_id,yorum.yorum,kullanici.ad,kullanici.soyad from yorum,kullanici WHERE kullanici.id = yorum.k_id and t_id = '{$t_id}'", PDO::FETCH_ASSOC);
            if($s2->rowCount() != 0)
            {
                $veri2 = array();
                foreach( $s2 as $rows ){
                    $veri2[] = $rows;
                }
                $veri["yorumicerik"] = $veri2;
            }
          
        
            $jsonArray["hata"] = false; 
            $jsonArray["veri"] = $veri;
    }else {
		 $_code = 200;
		 $jsonArray["hata"] = TRUE; 
	     $jsonArray["hataMesaj"] = "Tarif yok";
	 
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