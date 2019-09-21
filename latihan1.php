<?php
	$a1 = 4;
	$t1 = 8;
	$l1 = 1/2 * $a1 * $t1; 

	$r = 20;
	$phi = 3.14;
	$l2 = $phi * $r * $r;

	$a3 = 10;
	$t3 = 6;
	$l3 = $a3 * $t3;
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LATIHAN 1</title>
</head>
<body>
	<h2>Rumus Luas Segitiga</h2>
	<br> Luas Segitiga = 1/2 * Alas (a) * Tinggi (t)
	<br> Contoh: Sebuah segitiga memiliki panjang alas <?php echo $a1; ?> cm dan tinggi <?php echo $t1; ?> cm, maka luas segitiga tersebut adalah:
	<br> Luas = 1/2 * <?php echo $a1." * ".$t1." = ".$l1." cm2"; ?>
 

	<h2>Rumus Luas Lingkaran</h2>
	<br> Luas Lingkaran = π * Jari-jari (r) * Jari-jari (r)
	<br> Contoh: Sebuah lingkaran memiliki jari-jari <?php echo $r; ?> cm, maka luas lingkaran tersebut adalah:
	<br> Luas = <?php echo $phi." * ".$r." * ".$r." = ".$l2." cm2"; ?>


	<h2>Rumus Luas Jajar Genjang</h2>
	<br> Luas Jajar Genjang = Alas (a) * Tinggi (t) 
	<br> Contoh: Sebuah jajar genjang memiliki alas <?php echo $a3; ?> cm dan tinggi <?php echo $t3; ?> cm, maka luas jajar genjang tersebut adalah:
	<br> Luas = <?php echo $a3." * ".$t3." = ".$l3." cm2"; ?>

</body>
</html>