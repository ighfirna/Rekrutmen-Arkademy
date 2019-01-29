<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//peroleh base url
$base_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//peroleh file/content menjadii string
$result = file_get_contents($base_url . "/tes.json");
//merubah data string menjadi data object
$json_object = json_decode($result, true);

//cetak data object
echo "name : " . $json_object->name . "<br />";
?>
</body>
</html>