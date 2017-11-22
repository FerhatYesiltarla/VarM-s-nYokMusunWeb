<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>F.Y</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
var sayac=0;
	var tpara=2752343;//Kutularda Toplam Para Miktarı	
	var akutu=0;//Açılan Kutu Sayısı		
	function kalanpara(sayi)//Kalan Para Miktarını Döndürür
	{	var para=0;
			 if(sayi==1){para=1; return (para)}
		else if(sayi==2){para=2; return (para)}
		else if(sayi==3){para=5; return (para)}
		else if(sayi==4){para=10; return (para)}
		else if(sayi==5){para=25; return (para)}
		else if(sayi==6){para=50; return (para)}
		else if(sayi==7){para=100; return (para)}
		else if(sayi==8){para=200; return (para)}
		else if(sayi==9){para=300; return (para)}
		else if(sayi==10){para=400; return (para)}
		else if(sayi==11){para=500; return (para)}
		else if(sayi==12){para=750; return (para)}
		else if(sayi==13){para=10000; return (para)}
		else if(sayi==14){para=20000; return (para)}
		else if(sayi==15){para=30000; return (para)}
		else if(sayi==16){para=40000; return (para)}
		else if(sayi==17){para=50000; return (para)}
		else if(sayi==18){para=150000; return (para)}
		else if(sayi==19){para=200000; return (para)}
		else if(sayi==20){para=250000; return (para)}
		else if(sayi==21){para=500000; return (para)}
		else if(sayi==22){para=500000; return (para)}
		else if(sayi==23){para=500000; return (para)}
		else if(sayi==24){para=500000; return (para)}		
	}
	function teklif(tpara1, akutu1)//Teklif Miktarını Döndürür
	{
		var teklif=tpara1/(24-akutu1);					
		teklif=teklif-teklif*0.35;						
		if(confirm("Teklif Edilen Fiyat="+Math.round(teklif)+" TL")==true)
		{
			alert("Kazanılan Para Miktarı="+Math.round(teklif)+" TL");
			window.location.reload() 
		}		
	}	
	function sonkutu(sayi1)//Teklifleri Kabul Edilmezse Son Kutuyu Döndürür
	{
		alert("Kazanılan Para Miktarı="+sayi1+" TL");
		window.location.reload() 
	}
</script>
</head>
<style type="text/css">
#solpara 
{
position: absolute;
top: 0px;
left: 0px;
width: 300px;
color: red;
margin: 0px; 
padding: 0px;
height: 550px;
}
#solp1
{
position: absolute;
top:0 px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp2
{
position: absolute;
top: 40px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp3
{
position: absolute;
top: 80px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp4
{
position: absolute;
top: 120px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp5
{
position: absolute;
top: 160px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp6
{
position: absolute;
top: 200px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp7
{
position: absolute;
top: 240px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp8
{
position: absolute;
top: 280px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp9
{
position: absolute;
top: 320px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp10
{
position: absolute;
top: 360px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp11
{
position: absolute;
top: 400px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp12
{
position: absolute;
top: 440px;
left: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}

#sagpara {
position: absolute;
top : 0px;
right: 0px;        
width: 300px;
color: red;
margin: 0px; 
padding: 0px;
height: 550px;
}
#solp13
{
position: absolute;
top: 0px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp14
{
position: absolute;
top: 40px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp15
{
position: absolute;
top: 80px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp16
{
position: absolute;
top: 120px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp17
{
position: absolute;
top: 160px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp18
{
position: absolute;
top: 200px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp19
{
position: absolute;
top: 240px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp20
{
position: absolute;
top: 280px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp21
{
position: absolute;
top: 320px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp22
{
position: absolute;
top: 360px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp23
{
position: absolute;
top: 400px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#solp24
{
position: absolute;
top: 440px;
right: 0px;
width: 200px;
color: red;
margin: 0px; 
padding: 0px;
height: 40px;
}
#ortakutu
{  
  color: red;
  padding: 0px;  
  height: 550px; 
  width:1100px; 
}
#ortak1
{
position: absolute;
top: 0px;
left: 380px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak2
{
position: absolute;
top: 0px;
left: 480px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak3
{
position: absolute;
top: 0px;
left: 580px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak4
{
position: absolute;
top: 0px;
left: 680px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak5
{
position: absolute;
top: 0px;
left: 780px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak6
{
position: absolute;
top: 0px;
left: 880px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak7
{
position: absolute;
top: 100px;
left: 380px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak8
{
position: absolute;
top: 100px;
left: 480px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak9
{
position: absolute;
top: 100px;
left: 580px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak10
{
position: absolute;
top: 100px;
left: 680px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak11
{
position: absolute;
top: 100px;
left: 780px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak12
{
position: absolute;
top: 100px;
left: 880px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak13
{
position: absolute;
top: 200px;
left: 380px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak14
{
position: absolute;
top: 200px;
left: 480px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak15
{
position: absolute;
top: 200px;
left: 580px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak16
{
position: absolute;
top: 200px;
left: 680px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak17
{
position: absolute;
top: 200px;
left: 780px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak18
{
position: absolute;
top: 200px;
left: 880px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak19
{
position: absolute;
top: 300px;
left: 380px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak20
{
position: absolute;
top: 300px;
left: 480px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak21
{
position: absolute;
top: 300px;
left: 580px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak22
{
position: absolute;
top: 300px;
left: 680px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak23
{
position: absolute;
top: 300px;
left: 780px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}
#ortak24
{
position: absolute;
top: 300px;
left: 880px;
width: 100px;
color: red;
margin: 0px; 
padding: 0px;
height: 100px;
}

#logo
{  	
position: absolute;
top: 500px;	
font: 11pt Verdana;
color: #CCCCCC;
padding: 0px;  
height: 100px; 
width:300px; 
left: 10px;
}

html { 
  padding:0px;
  margin:0px;
  height: 100%;
}
body {
  font-size: 12px;
  font-family: Verdana, Arial, SunSans-Regular, Sans-Serif;
  color:#564b47;  
  padding:0px;
  margin:0px;
  height: 100%;
}
</style>
</head>
<body  background="Resimler/arkaplan.jpg">
<div id="solpara">
	<div id="solp1"><?php echo "<IMG SRC=Resimler/para1.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp2"><?php echo "<IMG SRC=Resimler/para2.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp3"><?php echo "<IMG SRC=Resimler/para3.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp4"><?php echo "<IMG SRC=Resimler/para4.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp5"><?php echo "<IMG SRC=Resimler/para5.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp6"><?php echo "<IMG SRC=Resimler/para6.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp7"><?php echo "<IMG SRC=Resimler/para7.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp8"><?php echo "<IMG SRC=Resimler/para8.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp9"><?php echo "<IMG SRC=Resimler/para9.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp10"><?php echo "<IMG SRC=Resimler/para10.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp11"><?php echo "<IMG SRC=Resimler/para11.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp12"><?php echo "<IMG SRC=Resimler/para12.jpg WIDTH=200 HEIGHT=40>"; ?></div>
</div>
<div id="sagpara">
	<div id="solp13"><?php echo "<IMG SRC=Resimler/para13.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp14"><?php echo "<IMG SRC=Resimler/para14.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp15"><?php echo "<IMG SRC=Resimler/para15.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp16"><?php echo "<IMG SRC=Resimler/para16.jpg WIDTH=200 HEIGHT=40>"; ?></div>	
	<div id="solp17"><?php echo "<IMG SRC=Resimler/para17.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp18"><?php echo "<IMG SRC=Resimler/para18.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp19"><?php echo "<IMG SRC=Resimler/para19.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp20"><?php echo "<IMG SRC=Resimler/para20.jpg WIDTH=200 HEIGHT=40>"; ?></div>	
	<div id="solp21"><?php echo "<IMG SRC=Resimler/para21.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp22"><?php echo "<IMG SRC=Resimler/para22.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp23"><?php echo "<IMG SRC=Resimler/para23.jpg WIDTH=200 HEIGHT=40>"; ?></div>
	<div id="solp24"><?php echo "<IMG SRC=Resimler/para24.jpg WIDTH=200 HEIGHT=40>"; ?></div>	
</div>
<div id="ortakutu">
<?php //Tekrarsız 1 ile 24 arasında sayı üretir
$sayilar1[]=""; 
$i=0; 
$kac_sayi_uretilecek=24; 
while($i<$kac_sayi_uretilecek)
	{
	$rastgele=rand(1,24);// 1 ile 24 arası sayi uretiyoruz
	if (in_array($rastgele,$sayilar1))// uretilen sayi dizide varmi? 
		{continue;}	// varsa döngüye devam
	else //yoksa 
		{
		$sayilar1[]=$rastgele;//rastgele sayiyi sayilar diznine atiyoruz
		$i++; 
		}
	} 	
?>	
<script>
	var tıksayi=-1;//Kutulara Tıklama Sayısı
</script>
	<div id="ortak1">	
		<img src="Resimler/kutu1.jpg" widht=100 height=100 id="yolla1"/>
		<script>			
			var sayi1="<?= $sayilar1[1] ?>";			
			$("#yolla1").click(function() 
			{				
				$.post( "gsayfa/g" + sayi1 + ".php").done(function( veri)
				{								
					$("#solp"+sayi1).html( veri);															
				});
				$.post("gsayfa/go1.php").done(function( veri)
				{
					$( "#ortak1" ).html( veri);					
				});
			sayac++;
			akutu++;			
			tpara=tpara-kalanpara(sayi1);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi1));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
			})					
		</script>

		
	</div>
	<div id="ortak2">
		<img src="Resimler/kutu2.jpg" widht=100 height=100 id="yolla2"/>
		<script>	
			var sayi2="<?= $sayilar1[2] ?>";
			$("#yolla2").click(function() 
			{
				$.post( "gsayfa/g" +sayi2+".php").done(function( veri)
				{
					$( "#solp"+sayi2 ).html( veri);
				});
				$.post( "gsayfa/go2.php").done(function( veri)
				{
					$( "#ortak2" ).html( veri);
				});
				
				sayac++;
				akutu++;
				tpara=tpara-kalanpara(sayi2);
				tıksayi++;
				if(tıksayi==23)
				{
				sonkutu(kalanpara(sayi2));
				}
				if(akutu!=24)
				{
				if(sayac==5)
				{
				teklif(tpara,akutu);
				sayac=0;					
				}	
				}
						
			})		
		</script>
	</div>
	<div id="ortak3">
		<img src="Resimler/kutu3.jpg" widht=100 height=100 id="yolla3"/>
		<script>	
			var sayi3="<?= $sayilar1[3] ?>";
			$("#yolla3").click(function() 
			{
				$.post( "gsayfa/g" +sayi3+".php").done(function( veri)
				{
					$( "#solp"+sayi3 ).html( veri);
				});
				$.post( "gsayfa/go3.php").done(function( veri)
				{
					$( "#ortak3" ).html( veri);
				});
				
				sayac++;
				akutu++;
				tpara=tpara-kalanpara(sayi3);
				tıksayi++;
				if(tıksayi==23)
				{
				sonkutu(kalanpara(sayi3));
				}
				if(akutu!=24)
				{
				if(sayac==5)
				{
				teklif(tpara,akutu);
				sayac=0;					
				}	
				}
						
			})		
		</script>
	</div>
	<div id="ortak4">
		<img src="Resimler/kutu4.jpg" widht=100 height=100 id="yolla4"/>
		<script>	
			var sayi4="<?= $sayilar1[4] ?>";
			$("#yolla4").click(function() 
			{
				$.post( "gsayfa/g" +sayi4+".php").done(function( veri)
				{
					$( "#solp"+sayi4 ).html( veri);
				});
				$.post( "gsayfa/go4.php").done(function( veri)
				{
					$( "#ortak4" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi4);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi4));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
						
			})		
		</script>
	</div>
	<div id="ortak5">
		<img src="Resimler/kutu5.jpg" widht=100 height=100 id="yolla5"/>
		<script>	
			var sayi5="<?= $sayilar1[5] ?>";
			$("#yolla5").click(function() 
			{
				$.post( "gsayfa/g" +sayi5+".php").done(function( veri)
				{
					$( "#solp"+sayi5 ).html( veri);
				});
				$.post( "gsayfa/go5.php").done(function( veri)
				{
					$( "#ortak5" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi5);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi5));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
						
			})		
		</script>
	</div>
	<div id="ortak6">
		<img src="Resimler/kutu6.jpg" widht=100 height=100 id="yolla6"/>
		<script>	
			var sayi6="<?= $sayilar1[6] ?>";
			$("#yolla6").click(function() 
			{
				$.post( "gsayfa/g" +sayi6+".php").done(function( veri)
				{
					$( "#solp"+sayi6 ).html( veri);
				});
				$.post( "gsayfa/go6.php").done(function( veri)
				{
					$( "#ortak6" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi6);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi6));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak7">
		<img src="Resimler/kutu7.jpg" widht=100 height=100 id="yolla7"/>
		<script>	
			var sayi7="<?= $sayilar1[7] ?>";
			$("#yolla7").click(function() 
			{
				$.post( "gsayfa/g" +sayi7+".php").done(function( veri)
				{
					$( "#solp"+sayi7 ).html( veri);
				});
				$.post( "gsayfa/go7.php").done(function( veri)
				{
					$( "#ortak7" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi7);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi7));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak8">
		<img src="Resimler/kutu8.jpg" widht=100 height=100 id="yolla8"/>
		<script>	
			var sayi8="<?= $sayilar1[8] ?>";
			$("#yolla8").click(function() 
			{
				$.post( "gsayfa/g" +sayi8+".php").done(function( veri)
				{
					$( "#solp"+sayi8 ).html( veri);
				});
				$.post( "gsayfa/go8.php").done(function( veri)
				{
					$( "#ortak8" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi8);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi8));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak9">
		<img src="Resimler/kutu9.jpg" widht=100 height=100 id="yolla9"/>
		<script>	
			var sayi9="<?= $sayilar1[9] ?>";
			$("#yolla9").click(function() 
			{
				$.post( "gsayfa/g" +sayi9+".php").done(function( veri)
				{
					$( "#solp"+sayi9 ).html( veri);
				});
				$.post( "gsayfa/go9.php").done(function( veri)
				{
					$( "#ortak9" ).html( veri);
				});
				
			sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi9);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi9));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
					
			})		
		</script>
	</div>
	<div id="ortak10">
		<img src="Resimler/kutu10.jpg" widht=100 height=100 id="yolla10"/>
		<script>	
			var sayi10="<?= $sayilar1[10] ?>";
			$("#yolla10").click(function() 
			{
				$.post( "gsayfa/g" +sayi10+".php").done(function( veri)
				{
					$( "#solp"+sayi10 ).html( veri);
				});
				$.post( "gsayfa/go10.php").done(function( veri)
				{
					$( "#ortak10" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi10);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi10));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
						
			})		
		</script>
	</div>
	<div id="ortak11">
		<img src="Resimler/kutu11.jpg" widht=100 height=100 id="yolla11"/>
		<script>	
			var sayi11="<?= $sayilar1[11] ?>";
			$("#yolla11").click(function() 
			{
				$.post( "gsayfa/g" +sayi11+".php").done(function( veri)
				{
					$( "#solp"+sayi11 ).html( veri);
				});
				$.post( "gsayfa/go11.php").done(function( veri)
				{
					$( "#ortak11" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi11);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi11));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak12">
		<img src="Resimler/kutu12.jpg" widht=100 height=100 id="yolla12"/>
		<script>	
			var sayi12="<?= $sayilar1[12] ?>";
			$("#yolla12").click(function() 
			{
				$.post( "gsayfa/g" +sayi12+".php").done(function( veri)
				{
					$( "#solp"+sayi12 ).html( veri);
				});
				$.post( "gsayfa/go12.php").done(function( veri)
				{
					$( "#ortak12" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi12);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi12));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak13">
		<img src="Resimler/kutu13.jpg" widht=100 height=100 id="yolla13"/>
		<script>	
			var sayi13="<?= $sayilar1[13] ?>";
			$("#yolla13").click(function() 
			{
				$.post( "gsayfa/g" +sayi13+".php").done(function( veri)
				{
					$( "#solp"+sayi13 ).html( veri);
				});
				$.post( "gsayfa/go13.php").done(function( veri)
				{
					$( "#ortak13" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi13);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi13));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak14">
		<img src="Resimler/kutu14.jpg" widht=100 height=100 id="yolla14"/>
		<script>	
			var sayi14="<?= $sayilar1[14] ?>";
			$("#yolla14").click(function() 
			{
				$.post( "gsayfa/g" +sayi14+".php").done(function( veri)
				{
					$( "#solp"+sayi14 ).html( veri);
				});
				$.post( "gsayfa/go14.php").done(function( veri)
				{
					$( "#ortak14" ).html( veri);
				});
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi14);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi14));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
						
			})		
		</script>
	</div>
	<div id="ortak15">
		<img src="Resimler/kutu15.jpg" widht=100 height=100 id="yolla15"/>
		<script>	
			var sayi15="<?= $sayilar1[15] ?>";
			$("#yolla15").click(function() 
			{
				$.post( "gsayfa/g" +sayi15+".php").done(function( veri)
				{
					$( "#solp"+sayi15 ).html( veri);
				});
				$.post( "gsayfa/go15.php").done(function( veri)
				{
					$( "#ortak15" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi15);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi15));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak16">
		<img src="Resimler/kutu16.jpg" widht=100 height=100 id="yolla16"/>
		<script>	
			var sayi16="<?= $sayilar1[16] ?>";
			$("#yolla16").click(function() 
			{
				$.post( "gsayfa/g" +sayi16+".php").done(function( veri)
				{
					$( "#solp"+sayi16 ).html( veri);
				});
				$.post( "gsayfa/go16.php").done(function( veri)
				{
					$( "#ortak16" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi16);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi16));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
						
			})		
		</script>
	</div>
	<div id="ortak17">
		<img src="Resimler/kutu17.jpg" widht=100 height=100 id="yolla17"/>
		<script>	
			var sayi17="<?= $sayilar1[17] ?>";
			$("#yolla17").click(function() 
			{
				$.post( "gsayfa/g" +sayi17+".php").done(function( veri)
				{
					$( "#solp"+sayi17 ).html( veri);
				});
				$.post( "gsayfa/go17.php").done(function( veri)
				{
					$( "#ortak17" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi17);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi17));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak18">
		<img src="Resimler/kutu18.jpg" widht=100 height=100 id="yolla18"/>
		<script>	
			var sayi18="<?= $sayilar1[18] ?>";
			$("#yolla18").click(function() 
			{
				$.post( "gsayfa/g" +sayi18+".php").done(function( veri)
				{
					$( "#solp"+sayi18 ).html( veri);
				});
				$.post( "gsayfa/go18.php").done(function( veri)
				{
					$( "#ortak18" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi18);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi18));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak19">
		<img src="Resimler/kutu19.jpg" widht=100 height=100 id="yolla19"/>
		<script>	
			var sayi19="<?= $sayilar1[19] ?>";
			$("#yolla19").click(function() 
			{
				$.post( "gsayfa/g" +sayi19+".php").done(function( veri)
				{
					$( "#solp"+sayi19 ).html( veri);
				});
				$.post( "gsayfa/go19.php").done(function( veri)
				{
					$( "#ortak19" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi19);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi19));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak20">
		<img src="Resimler/kutu20.jpg" widht=100 height=100 id="yolla20"/>
		<script>	
			var sayi20="<?= $sayilar1[20] ?>";
			$("#yolla20").click(function() 
			{
				$.post( "gsayfa/g" +sayi20+".php").done(function( veri)
				{
					$( "#solp"+sayi20 ).html( veri);
				});
				$.post( "gsayfa/go20.php").done(function( veri)
				{
					$( "#ortak20" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi20);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi20));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak21">
		<img src="Resimler/kutu21.jpg" widht=100 height=100 id="yolla21"/>
		<script>	
			var sayi21="<?= $sayilar1[21] ?>";
			$("#yolla21").click(function() 
			{
				$.post( "gsayfa/g" +sayi21+".php").done(function( veri)
				{
					$( "#solp"+sayi21 ).html( veri);
				});
				$.post( "gsayfa/go21.php").done(function( veri)
				{
					$( "#ortak21" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi21);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi21));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak22">
		<img src="Resimler/kutu22.jpg" widht=100 height=100 id="yolla22"/>
		<script>	
			var sayi22="<?= $sayilar1[22] ?>";
			$("#yolla22").click(function() 
			{
				$.post( "gsayfa/g" +sayi22+".php").done(function( veri)
				{
					$( "#solp"+sayi22 ).html( veri);
				});
				$.post( "gsayfa/go22.php").done(function( veri)
				{
					$( "#ortak22" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi22);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi22));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak23">
		<img src="Resimler/kutu23.jpg" widht=100 height=100 id="yolla23"/>
		<script>	
			var sayi23="<?= $sayilar1[23] ?>";
			$("#yolla23").click(function() 
			{
				$.post( "gsayfa/g" +sayi23+".php").done(function( veri)
				{
					$( "#solp"+sayi23 ).html( veri);
				});
				$.post( "gsayfa/go23.php").done(function( veri)
				{
					$( "#ortak23" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi23);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi23));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	<div id="ortak24">
		<img src="Resimler/kutu24.jpg" widht=100 height=100 id="yolla24"/>
		<script>	
			var sayi24="<?= $sayilar1[24] ?>";
			$("#yolla24").click(function() 
			{
				$.post( "gsayfa/g" +sayi24+".php").done(function( veri)
				{
					$( "#solp"+sayi24 ).html( veri);
				});
				$.post( "gsayfa/go24.php").done(function( veri)
				{
					$( "#ortak24" ).html( veri);
				});
				
				sayac++;
			akutu++;
			tpara=tpara-kalanpara(sayi24);
			tıksayi++;
			if(tıksayi==23)
			{
				sonkutu(kalanpara(sayi24));
			}
			if(akutu!=24)
			{
			if(sayac==5)
			{
				teklif(tpara,akutu);
				sayac=0;					
			}	
			}
				
						
			})		
		</script>
	</div>
	
</div>
<div id="logo">
	<?php echo "Ferhat YEŞİLTARLA" ?>
</div>
</body>
</html>