<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
	$jumlah = 0;
	$akhir = $_POST['akhir'];
	for ($i=1; $i<akhir; $i++){
	// echo "$i + ";
	$jumlah += $i;
}
echo "total jabat tangan = $jumlah";
	}
?>
<form action="" method="post">
	<input type="text" name="akhir">
	<input type="submit" name="proses">
</form>
</body>
</html>