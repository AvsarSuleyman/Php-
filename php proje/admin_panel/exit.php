<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avsar Emlak Satılık,Kiralık,Arsalar</title>
</head>

<body>
	<?php

session_start();

ob_start();

session_destroy();

echo "Çıkış Yaptınız.Ana Sayfaya Yönlendiriliyorsunuz";

header("Refresh: 2; url=index.php");

?>
</body>
</html>
