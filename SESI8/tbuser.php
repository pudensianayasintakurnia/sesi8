<?php
    include("konfigurasi.php");
    $cnn =mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal konksi ke dbms");

    $jdpage ="List";
    $page ="user-list.php";

    if(isset($_POST["opsi"])){
        SWITCH($_post["opsi"]){
            case "store":
                $p1 =$_POST["txPASS1"];
                $p2 =$_POST["txPASS2"];
                if($p1 == $p2) {
                $EMAIL =$_POST["txEMAIL"];
                $username =$_POST["txUSERNAME"];
                $iduser = md5($email);
$sql = "INSERT INTO tbuser(nama, email, username, passkey,iduser ) VALUES('$nama', '$email', '$username', '$passkey','$iduser');";
$hasil = mysql_query($cnn,$sql);                 }
        break;
    }
    }

    if(isset($_GET["aksi"]))
       Switch($_GET["aksi"]){
           case"new":
             $page="user-new.php";
             $jdpage = "Tambah";
           break;
         }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?jdpage?> -Tabel User</title>
</head>
<body>
 
<?php
   include($page);
?>
</body>
</html>