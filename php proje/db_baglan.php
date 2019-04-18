<title>Avsar Emlak Satılık,Kiralık,Arsalar</title>
<?php
$host="localhost";
$db="donem_odevi";
$user="root";
$pass="";
$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");
 
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_set_charset('latin5',$conn);
?>