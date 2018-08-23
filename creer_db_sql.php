<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>congres</title>

<?php $con=mysqli_connect("localhost","id528441_jpasfrucje1","gpGq7JuYSDsB","id528441_jpasfrucje1"); if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); } $sq2="DROP TABLE congres"; if (mysqli_query($con,$sq2)) { echo "deleted"; } $sql="CREATE TABLE congres(PID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(PID), Nom CHAR(200), Continent CHAR(20), Pays CHAR(15),Domaine CHAR(50), Adresse_web CHAR(255), Date CHAR(12))"; if (mysqli_query($con,$sql)) {
echo "Table congres created successfully"; } else {
echo "Error creating table: " . mysqli_error($con); } mysqli_close($con);
?>
</head>
<body>
<br>
</body></html>