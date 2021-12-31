<?php session_start();
include '../system/baglan.php';
include '../system/fonksiyon.php';
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 

if($_SERVER['REQUEST_METHOD'] == "GET") {
 

    $sorgudeger = "1 =1 ";
    $yonlendirme = true;
    $gidecekSorgu = "SELECT * from tarif where ".$sorgudeger."order by id desc";
    if(isset($_GET["a"]))
    {
        if($_GET["a"] == "k")
        {
            $sorgudeger = "kategori = '". $_GET["d"] ."' ";
        }
        else if($_GET["a"] == "a")
        {
            $sorgudeger = "ad like '%". $_GET["d"] ."%' ";
        }
        else if($_GET["a"] == "t")
        {
            $sorgudeger = "k_id =". $_SESSION["kID"]." ";
        }
        else if($_GET["a"] == "z")
        {
            $yonlendirme = false;
            $gidecekSorgu = "SELECT tarif.* from tarif,kullanici where tarif.k_id = kullanici.id AND kullanici.admin = 1 order by id desc";
        }
    }

    if ($yonlendirme) {
        $gidecekSorgu = "SELECT * from tarif where ".$sorgudeger."order by id desc";
    }
    
    
    $sorgu = $db->query($gidecekSorgu, PDO::FETCH_ASSOC);
   if($sorgu->rowCount()) {
            $veri2 = array();
    	foreach( $sorgu as $row ){
            $veri = array();
            $k_id = $row["k_id"];
            $t_id = $row["id"];
            $veri["tarif"] = $row;

            $s1 = $db->query("SELECT * FROM `kullanici` WHERE id = '{$k_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["kisi"] = $s1["ad"] . " ".$s1["soyad"];
            else
                $veri["kisi"] = "";

            $s1 = $db->query("SELECT count(*) as sayi FROM `begeni` WHERE t_id = '{$t_id}' and begenme = 0 and begen = 1")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["begen"] = $s1["sayi"];
            else
                $veri["begen"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `begeni` WHERE t_id = '{$t_id}' and begenme = 1 and begen = 0")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["begenme"] = $s1["sayi"];
            else
                $veri["begenme"] = 0;
            $s1 = $db->query("SELECT count(*) as sayi FROM `yorum` WHERE t_id = '{$t_id}'")->fetch(PDO::FETCH_ASSOC);
            if ( $s1 )
                $veri["yorum"] = $s1["sayi"];
            else
                $veri["yorum"] = 0;
            $veri2[] = $veri;
        }
            $jsonArray["hata"] = false; 
            $jsonArray["veri"] = $veri2;
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