<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
</head>
<body>
<?php

$con=mysqli_connect("mysql.hostinger.fr","u431645439_jpas","jpas4u","u431645439_congr"); 
if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$del="UPDATE congres SET Date=STR_TO_DATE(Date,'%d-%m-%Y')";
if (mysqli_query($con,$del)) {
echo "format de date change avec succes"; } else {
echo "Erreur: " . mysqli_error($con); } mysqli_close($con);
?>

</body>
