<title>Avsar Emlak Sat&#305;l&#305;k,Kiral&#305;k,Arsalar</title>
<? 
  # Yenýden orneklendýr fonksýyonu 
  # ------------------------------------------------------ 
  function resample_buyuk($resim,$max_en=1024,$max_boy=768) 
     { 
     # Icerýk ýcýn kesý baslat ... 
     ob_start(); 

     # Ilk boyutlar 
     $boyut = getimagesize($resim); 
     $en    = $boyut[0]; 
     $boy   = $boyut[1]; 

     # Yeni boyutlar 
     $x_oran = $max_en  / $en; 
     $y_oran = $max_boy / $boy; 

     if (($en <= $max_en) and ($boy <= $max_boy)){ 
        $son_en  = $en; 
        $son_boy = $boy; 
        } 
     else if (($x_oran * $boy) < $max_boy){ 
        $son_en  = $max_en; 
        $son_boy = ceil($x_oran * $boy); 
        } 
     else { 
        $son_en  = ceil($y_oran * $en); 
        $son_boy = $max_boy; 
        } 

     # Eský ve yený resýmler 
     $eski = imagecreatefromjpeg($resim); 
     $yeni = imagecreatetruecolor($son_en,$son_boy); 

     # Eský resmý yenýden orneklendýr 
     imagecopyresampled( 
        $yeni,$eski,0,0,0,0, 
        $son_en,$son_boy,$en,$boy); 

     # Yený resmý bas ve ýcerýgý cek 
     imagejpeg($yeni,null,100); 
     $icerik = ob_get_contents(); 

     # Resýmlerý yoket ve ýcerýgý cýkart 
     
    // imagedestroy($eski); 
     imagedestroy($yeni); 
	 ob_end_clean(); 

     return $icerik; 
     } 

?>