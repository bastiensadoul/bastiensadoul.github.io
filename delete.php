<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
</head>
<body>
<?php
$del="DELETE FROM congres ORDER BY PID DESC LIMIT 1 ";
$con=mysqli_connect("localhost","id528441_jpasfrucje1","gpGq7JuYSDsB","id528441_jpasfrucje1");
if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
if (mysqli_query($con,$del)) {
echo "derniere ligne effacee avec succes"; } else {
echo "Erreur: " . mysqli_error($con); } mysqli_close($con);
?>

</body>




