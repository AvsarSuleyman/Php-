<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#genel{
height:850px;
width:750px;
margin:0px auto;
}
#banner{
width:750px;
height:105px;
background-image:url(image/header_block_border_top.jpg);
background-repeat:repeat;}
#logo{
	height:81px;
	width:359px;
	margin-top:12px;
	float:left;
}
#form{height:95px;
width:300px;
margin-top:10px;
float:left;
margin-left:50px;}
.b{margin-left:220px;
background-image:url(image/submit.jpg);
text-decoration:none;
color:#FFFFFF;
}
#menu{
	height:50px;
	width:750px;
	background-image:url(image/menu_block_border_top.jpg);
	float: left;
}
#orta-genel{
	height:550px;
	width:750px;
	float: left;
}
#orta-sol{
	width:150px;
	height:550px;
	float:left;
}
#orta-orta{
	width:430px;
	height:550px;
	float:left;
	margin-left: 20px;
}
#orta-sag{
	width:150px;
	height:550px;
	float:left;
}

#orta-sag-block{
width:150px;
height:30px;
background-image:url(image/block_title_bg.jpg);
color:#FFFFFF;}
#orta-sag-block-bulten-banner{
	height:20px;
	width:100px;
	margin-top:0px;
	margin-left:15px;
}

#orta-sag-block-bulten{
	width:150px;
	height:105px;
}

.c{ margin-left:60px;
background-image:url(image/submit.jpg);
text-decoration:none;
color:#FFFFFF;
margin-top:5px;
}
a{text-decoration:none;
color:#FFFFFF;
font-size:18px;
}
#link{width:600px;
height:20px;
float:left;
margin-top:15px;
margin-left:10px;}
.d{color:#000000;}

#orta-sag-block-anket{
	width:150px;
	height:340px;
	margin-top: 30px;
}
.f{ margin-left:80px;
background-image:url(image/submit.jpg);
text-decoration:none;
color:#FFFFFF;}

#admin{margin-left:50px;
margin-top:7px;
float:left;}
}


#orta-sag-block-anket form {
	font-size: 14px;
	font-style: normal;
}
#footer {
	height:95px;
	width: 430px;
	background-color: #CBD5B2;
}
#footer_sag {	float: right;
	background-image: url(image/b-21-140x100.jpg);
	height: 93px;
	width: 140px;
}
#footer_sol {	float:left;
	height: 20px;
	background-color: #B6C491;
	margin-top: 25px;
	margin-left: 25px;
	width: 180px;
	text-align: center;
	border: 2px solid #666;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avsar Emlak Satılık,Kiralık,Arsalar</title>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="genel">
<div id="banner">
<div id="logo"><a href="index.php"><img src="image/LOGO.jpg" border="0" /></a></div></div>
<div id="menu">
  <div id="link"> <a href="index.php">AnaSayfa</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="urun.php">Ürünler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="haber.php">Haberler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bulten.php">Bulten</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="iletisim.php">İletişim</a></div>
  <div id="admin"><a href="admin_panel/index.php"><img src="image/sender.png" border="0" /></a></div>
</div>
<div id="orta-genel">
<div id="orta-sol">
<div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0">Avsar Emlak</div>
    <div class="CollapsiblePanelContent">
      <p>2006 yılında kurulan ve bugün Türkiye'nin en büyük 2. emlak portalı   Avsar Emlak 'in yeni sosyal medya ajansı olduk. Facebook ve Twitter   hesapları yöneticiliğini üstlenirken, üzerimize düşen sorumluluğun   farkındayız.</p>
      <p>&nbsp;</p>
    </div>
</div>
</div>
<div id="orta-orta">
<form action="iletisim.php" method="post">
  <table width="425" border="0">
    <tr>
      <td height="43" colspan="2"><div align="center"><strong>İletişim Menüsü</strong></div></td>
      </tr>
    <tr>
      <td width="118" height="36"><div align="right">Ad-Soyad</div></td>
      <td width="297"><input type="text" name="adsoyad" width="160"> &nbsp;</td>
    </tr>
    <tr>
      <td height="35"><div align="right">E-Mail Adres</div></td>
      <td><input type="text" name="emailadres" width="160" id="emailadres">&nbsp;</td>
    </tr>
    <tr>
      <td height="37"><div align="right">Mesaj Başlık</div></td>
      <td><input type="text" name="mesajbaslik" width="160" id="mesajbaslik">&nbsp;</td>
    </tr>
    <tr>
    <td height="137"><div align="right">Mesaj İçerik</div></td>
      <td><textarea name="mesajicerik" cols="30" rows="7" id="mesajicerik" width="160"></textarea>        &nbsp;</td
    ></tr>
    <tr>
    <td height="43" colspan="2"><div align="center"><strong><input name="Gönder" type="submit" class="Accordion" value="Gonder" /></strong></div></td>
    </tr>
  </table>

  <br />
<br />
</form>

<?php

if (@$_POST){ 
 @$adsoyad=$_POST['adsoyad'];
@$email=$_POST['emailadres'];
@$mesajbaslik=$_POST['mesajbaslik'];
@$mesajicerik=$_POST['mesajicerik'];
if(@$adsoyad!=""){
include("db_baglan.php");// eğer post olayı varsa
 
     
  if (@mysql_query("insert into mesaj(adsoyad,emailadres,mesajbaslik,mesajicerik)values('$adsoyad','$email','$mesajbaslik','$mesajicerik')")){
         echo "<u><b>Yeni ders başarı ile kaydedilmiştir.</b></u><br>";
         
  }
	  }
	  
      else{
         //echo "<b>Hata:</b> ",mysql_error();
      }
   }


?>
<br />
<br />
<div id="footer">
    <div id="footer_sag"><br />
    </div>
    <div id="footer_sol">Süleyman Beytullah Avsar &copy;</div>
  </div>
</div>
<div id="orta-sag"><div id="orta-sag-block-bulten">
<div id="orta-sag-block">
<div id="orta-sag-block-bulten-banner">
<img src="image/block_newsletter_title_marker.gif" /> &nbsp;
BÜLTEN</div></div>e-posta adresi:
<form action="?" method="post">
  <input type="text" name="e_posta" />
  <input type="submit" class="c" value="abone ol" name="gorev" />
</form>

<?php
@$e_posta=$_POST['e_posta'];
@$gorev=$_POST['gorev'];
if($e_posta==""){
}
else{
if(isset($gorev)){
$e_posta=$_POST['e_posta'];
include("db_baglan.php");
$sorgu=mysql_query("insert into bulten(e_posta) values('$e_posta')");
if($sorgu){
echo "e-postanız kayıt edildi.";}
}
}
?>



</div>
<div id="orta-sag-block-anket">
<div id="orta-sag-block"><div id="orta-sag-block-bulten-banner"><img src="image/block_title_marker.gif" />ANKET</div></div>
<form action="?" method="post">
  <p><img src="image/chart.png" width="150" height="90" alt="anket logosu" /></p>
  <p>Online alışveriş için temel sebebi nedir?<br />
    <input type="radio" name="anket" value="1" />
    Daha uygun nakliye ve teslim<br />
    <input type="radio" name="anket" value="2" />
    Büyük ürün yelpazesi<br />
    <input type="radio" name="anket" value="3" />
    Evden çıkmadan alışveriş yapmam<br />
    <input type="radio" name="anket" value="4" />
    Ödemede güvenlik<br />
    <input type="radio" name="anket" value="5" />
    30 gün içinde geri iade<br />
    <input type="radio" name="anket" value="6" />
    Başka<br />
    <input class="f" type="submit" value="oy ver"  name="gorev"/>
  </p>
</form>

<?php
@mysql_query ('SET NAMES utf8');
@mysql_query ('SET COLLATION_CONNECTION=utf8_general_ci');


@$anket=$_POST['anket'];
@$gorev=$_POST['gorev'];
if(isset($gorev)){
@include("db_baglan.php");
@$sorgu=mysql_query("insert into anket(cevaplar) values('$anket')");

if($sorgu){
echo "oy verdiğiniz için teşekkürler";
}
}
?>

</form>
</div>

</div>










</div>





</div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
//-->
</script>
</body>
</html>
