<!DOCTYPE html>
<html lang="pl">
<head>
<title>Panel</title>
<style>
#formularz{
width:50%;
height:100%;
float:left;
}
#formularz2{
width:50%;
height:100%;
float:left;
} 
.wpis_id{
float:left;
}
.wpis_tytul{
border-style:solid;
float:left;
display:block
}
.zdj_id{
float:left;
}
.zdj{
border-style:solid;
float:left;
display:block;
}
</style>
<meta charset="utf-8">
</head>
<body>
	<div id="formularz">
	<h1>OBRAZKI OPCJE</h1>
			<form action="wpisz_zdjecie.php" method="post" enctype="multipart/form-data">
			Podaj tytuł obrazka: 
				<input type="text" name="tytul_o" />
				<br /> Podaj tytul po angielsku : <input type="text" name="tytul_ang_o" />
				<input type="submit" value="insert" />
			</form>
			
			<br>
			<br>
			<br>
			<br>
			<?php 
			$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test;charset=utf8','root','');
		$wynik = $pdo->query("SELECT * FROM zdjecia;");
		foreach($wynik as $row)
		{
		echo '<div class="zdj_id">'.$row['id'].'.</div><div class="zdj">'.$row['tytul'].'</div><br><br>
		';
		}
			?>
			<br>
			<br>
			<br>
			<h3> USUN OBRAZKI</h3>
			<form action="delete_zdj.php" method="post">
			<input type="text" name="zdj_id" placeholder="WPROWADZ ID" />
			<input type="submit" value="DELETE" />
			</form>

	</div>
<div id="formularz2">
<h1>WPISY OPCJE</h1>
<br>
<br>
<br>
<h3>DODAJ WPIS</h3>
<form action="wpisz_WPIS.php" method="post">
			Podaj tytuł wpisu: 
				<input type="text" name="tytul_w" />
				<br /> Podaj tytul po angielsku : <input type="text" name="tytul_ang_w" /><br />
				Podaj tresc :
				<input type="text" name="tresc" />
				<br /> Podaj tresc po angielsku : <input type="text" name="tresc_ang" />
				<input type="submit" value="insert" />
			</form>
			<br>
			<br>
			<br>
			<br>
			<?php 
			$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test;charset=utf8','root','');
		$wynik = $pdo->query("SELECT * FROM wpis;");
		foreach($wynik as $row)
		{
		echo '<div class="wpis_id">'.$row['id'].'.</div><div class="wpis_tytul">'.$row['tytul'].'</div><br><br>
		';
		}
			?>
			<br>
			<br>
			<br>
			<h3> USUN WPIS</h3>
			<form action="delete_wpis.php" method="post">
			<input type="text" name="wpis_id" placeholder="WPROWADZ ID" />
			<input type="submit" value="DELETE" />
			</form>

</div>
</body>
</html>