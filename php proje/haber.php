
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#genel{
	height:700px;
	width:750px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
#banner{
width:750px;
height:105px;
background-image:url(image/header_block_border_top.jpg);
background-repeat:repeat;}
#logo{ height:81px;
width:359px;
margin-top:12px;
float:left;}
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
	width:750px;
	float: left;
}
#orta-sol{
	width:150px;
	height:500px;
	float:left;
}
#orta-orta{
width:450px;
height:500px;
float:left;
}
#orta-sag{
	width:150px;
	height:500px;
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
	height:80px;
	margin-top: 30px;
}
.f{ margin-left:80px;
background-image:url(image/submit.jpg);
text-decoration:none;
color:#FFFFFF;
}
#admin{margin-left:50px;
margin-top:7px;
float:left;}
#haber{
	width:450px;
}
#urun{height:250px;
width:450px;}

#haber_banner{width:400px;
margin-left:25px;
text-align:center;
height:30px;
background-image:url(image/block_title_bg.jpg);
color:#FFFFFF;}

#haber_icerik{
	width:440px;
	margin-left: 10px;
}



#haber_sinir{width:400px;}

#footer{
	height:95px;
	width: 437px;
	background-color: #CBD5B2;
	margin-top: 65px;
}
#footer_sag{
	float: right;
	background-image: url(image/b-21-140x100.jpg);
	height: 93px;
	width: 140px;
	}
#orta-orta table tr td {
	font-size: 14px;
	font-style: normal;
	text-align: left;
}
#orta-orta table tr td img {
	float: right;
}
#footer_sol{
	float:left;
	height: 20px;
	background-color: #B6C491;
	margin-top: 25px;
	margin-left: 25px;
	width: 180px;
	text-align: center;
	border: 2px solid #666;
}



#orta-sag-block-anket form {
	font-size: 14px;
	font-style: normal;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="genel">
<div id="banner">
<div id="logo">

<a href="index.php"><img src="image/LOGO.jpg" border="0" /></a>

</div>
</div>
<div id="menu">
  <div id="link"> <a href="index.php">AnaSayfa</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="urun.php">Ürünler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="haber.php">Haberler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bulten.php">Bulten</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="iletisim.php">İletişim</a></div>
  <div id="admin"><a href="admin_panel/index.php"><img src="image/sender.png" border="0" /></a></div>
</div>
<div id="orta-sol">
  
  <div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0">Avsar Emlak</div>
    <div class="CollapsiblePanelContent">
      <p>2006 yılında kurulan ve bugün Türkiye'nin en büyük 2. emlak portalı   Avsar Emlak 'in yeni sosyal medya ajansı olduk. Facebook ve Twitter   hesapları yöneticiliğini üstlenirken, üzerimize düşen sorumluluğun   farkındayız.</p>
      <p>&nbsp;</p>
    </div>
</div>
  <br />
</div>
<div id="orta-orta">
  <div id="haber">
<div id="haber_banner"><img width="20" height="20" src="image/1306082477_newsletter.png" />&nbsp;&nbsp;HABERLER</div>
<div id="haber_icerik">
<?

include("db_baglan.php");
$sorgu=mysql_query("select * from haber");
while($aa=mysql_fetch_array($sorgu)){

echo "$aa[baslik]<br>";
echo "<div id='haber_sinir'>";
echo "$aa[icerik]";
echo "</div>";
echo "<br><br>";
}














?>






</div>
</div>
<table width="447" height="255">
  <tr>
    <td width="176"><img src="image/emlak_gyo_dan_yeni_ihale.jpg" width="155" height="110" alt="emlak_konut" /></td>
    <td width="259">Sosyal medya hesap yöneticiliği amaçları sosyal medya takipçi sayılarını   arttırmak olsa da asıl amaç üzerinde tartışılan, kullanıcıların aktif   olarak takip ettiği Facebook sayfası ve Twitter hesabı olmaktır.</td>
  </tr>
  <tr>
    <td height="127"><img src="image/İçerik.jpg" width="155" height="110" alt="avsar emlak" /></td>
    <td>Ofisimizi ziyaret ederek veya bizimle irtibata geçerek  bize   talebinizi bildirdiğinizde sizin için en uygun gayrimenkulü araştırıp   tespit ederek sözleşmemizi yaptıktan sonra, eğer varsa kredi takibinizi   ve tapu takibinizi gerçekleştiriyoruz. </td>
  </tr>
</table>
<div id="footer">
	  <div id="footer_sag"></div>
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
  <input type="submit" class="c" value="abone ol"  name="gorev"/>
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
<div id="orta-sag-block"><div id="orta-sag-block-bulten-banner"><img src="image/block_title_marker.gif" />&nbsp;ANKET</div></div>
<form action="?" method="post">
  <p><img src="image/chart.png" width="150" height="90" alt="anket logosu" /></p>
  <p>Online Satılık.Kiralık ve Arsa 6 temel sebebi nedir?<br />
    <input type="radio" name="anket" value="1" />
    Daha uygun ev ve arsa ve teslim<br />
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
    <input class="f" type="submit" value="oy ver" name="gorev"/>
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
?></div></div></div>





</div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
//-->
</script>
</body>
</html>
