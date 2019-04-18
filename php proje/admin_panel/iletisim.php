<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<title>Avsar Emlak Satılık,Kiralık,Arsalar</title>
<link href="./css/main.css" rel="stylesheet" type="text/css" />


<meta charset="UTF-8"></head>

<body>

<div id="header">
  <div id="header-top">
		<div id="logo">
			<h1>Platinum Admin</h1>
			<span id="slogan">bir ByEmlak tasarımı</span> </div>
		<!-- end logo -->
		<!-- end login -->
		<!-- end div#nav -->
	</div>
	<!-- end div#header-top --><!-- end div#breadCrumb -->
	<!-- end div#search-box -->
</div>
<!-- end header -->
<div id="page-wrap">
  <!-- end right-sidebar -->
<div id="main-content">
		<div>
			<div>
				<h3>What would you like to do?</h3>
				<ul class="iconset">
				  <li><a href="urun_ekle.php"><span>
				  <img alt="event" src="images/icons/1305807834_basket_add.png" /> <br />
				  Ürün </span></a></li>
					<li><a href="profil.php"><span>
					<img alt="event" src="./images/icons/database.png" /> <br />
					Profil </span></a></li>
					<li><a href="mesaj.php"><span>
					<img alt="event" src="./images/icons/theme.png" /> <br />
					Mesajlar </span></a></li>
					<li><a href="bulten.php"><span>
					<img alt="event" src="images/icons/1305798842_newspaper.png" /> <br />
					Takipçiler </span></a></li>
                    
                    <li><a href="haber.php"><span>
					<img alt="event" src="images/icons/1305798711_add-notes.png" /> <br />
					Haber</span></a></li>
                    
                    <li><a href="anket.php"><span>
					<img alt="event" src="./images/icons/stats.png" /> <br />
					Anket sonuçları </span></a></li>
                    <li><a href="logout.php"><span>
					<img alt="event" src="images/icons/1305798920_exit.png" /> <br />
                  
					Çıkış yap </span></a></li>
					
				</ul>
				
				<br class="clear" />
			</div>
		</div>
		<div class="innerdiv clear">
		</div>
        


  	
<?php

include ("db_baglan.php");

@$sonuc = mysql_query("select * from mesaj");


    while(@$oku = mysql_fetch_array($sonuc))
    {
        echo "Adı Soyadı: ".$oku['adsoyad']."<br>";
		 echo "E-Mail Adres: ".$oku['emailadres']."<br>";
		  echo "Mesaj Başlık: ".$oku['mesajbaslik']."<br>";
		   echo "Mesaj İçerik: ".$oku['mesaicerik']."<br>";
		   echo "-------------------------------------------"."<br>";
		   
		 //  echo "$oku[adsoyad]";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;";
//echo "<a href='bulten_delete.php?say=$oku[id]'>sil</a>";
//echo "<br>";
		   
		
	}


mysql_close($conn);







?>

    
	
<!-- end div.tab -->
		<!-- end innerdiv notification -->
		<!-- end div.notify --><!-- end div alerts -->
		<!-- end div.buttons -->
		<!-- end div.buttons -->
</div>
<!-- end main-content --></div>
<!-- end page-wrap -->
<div id="footer">
	<p>© 2013 ByEmlak</p>
</div>
<!-- end footer -->

</body>

</html>
