
<html>

<head>
<meta charset="utf-8"/>
<title>neredesin sen?</title>
<link rel="stylesheet" type="text/css" href="stylenrd.css"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="jquery.chained.min.js"></script>

</head>
<body>
<div id="icerik">
	<div id="banner">
	<label class="neredesinsen">neredesin<br>
	sen?</label>
	<img id="evler" src="evler.png"/>
	 
</div>
</body>
<body>	
<div id="sagkisim">
	<div id="sagkisim">
	   <div id="sagframe">
	   <meta name="viewport" content="initial-scale=1.0">
       <meta charset="utf-8">
       <div id="map"></div>
    <script>
      </script>
	</div>
</div>
</div>
</body>
<body>		
<div id="solkisim">
    <div id="solframe">	
        <form>
			
		<select id="sehirframe">
		<option>Lütfen şehri seçiniz.</option>
		<?php
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$db_name = "siteler";
		$connect = mysqli_connect($hostname, $username, $password, $db_name);
		$query = "SELECT * FROM `sehirler`";
		$result = mysqli_query($connect, $query);
         ?>
		<?php while($row= mysqli_fetch_array($result)):;?>
		<option><?php echo $row["Sehir"];?></option>
	    
		<?php endwhile; ?>

		</select>
 
       <select id="firmaframe">
		        <option>Sipariş verilen firma</option>
			    <option>Kırçiçeği</option>
			    <option>Ora</option>
			    <option>Konyalı Ahmet Usta</option>
			    <option>Melike Kebapçısı</option></select>
            <input id="siparisframe"  label class="yazi"  placeholder="Sipariş kodunu giriniz."/>

            <input id="tamambutton" type="submit" value="TAMAM">
		</form>	
	    <form action=""><input id="onaybox" label class="yazi" placeholder="Sipariş Bilgileriniz"/></form>
		<div id="aciklamabox"></div>
		<div id="bulbutton"><label class="bul">BUL</label><div/>
	</div>
</div>
</body>
        


