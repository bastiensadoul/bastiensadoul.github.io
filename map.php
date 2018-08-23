<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>map</title>

  
</head><body>

<form>
&nbsp; Domaine: &nbsp;&nbsp;
  <select name="domaine" onchange='this.form.submit()'>
  <option selected="">Tous</option>
  <option>Santé</option>
  <option>Environnement</option>
  <option>Physique</option>
  <option>Chimie</option>
  <option>Agronomie</option>
  <option>Univers</option>
  <option>Sciences Humaines et Sociales</option>
  <option>Cultures et Litteratures</option>
  </select>
&nbsp; <br>
  <br>
<noscript><input type="submit" value="Submit"></noscript>
</form>


<br>

<map name="mon_mapping"><area shape="circle" coords="320,170,50"href="map.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Afrique" 
alt="Afrique" onClick="test('Afrique');"><area shape="circle" coords="150,200,50"href="map.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Amerique du Sud" 
alt="Amerique du Sud" onClick="test('Amerique du Sud');"><area shape="circle" coords="75,80,50"
href="map.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Amerique du Nord" 
alt="Amerique du Nord" onClick="test('Amerique du Nord');"><area shape="circle" coords="450,80,50"
href="map.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Asie" 
alt="Asie" onClick="test('Asie');"><area shape="circle" coords="300,60,50"href="map.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Europe" 
alt="Europe" onClick="test('Europe');"><area shape="circle" coords="550,220,50"href="map.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Oceanie" 
alt="Oceanie" onClick="test('Oceanie');"></map>
<img style="width: 691px; height: 319px;" alt="continents" src="mapcreator.php?domaine=
<?php 
$domaine = $_GET['domaine'];echo $domaine;
?>
"usemap="#mon_mapping">
<br>


&nbsp;
&nbsp;<br>



<br>

<?php $domaine = $_GET['domaine'];
$continent = $_GET['continent'];
$con=mysqli_connect("localhost","id528441_jpasfrucje1","gpGq7JuYSDsB","id528441_jpasfrucje1"); 
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if ($domaine=="Tous" || !isset($domaine))
{
if ($continent=="Tous" || !isset($continent))
{
echo "Domaine = Tous";
echo "<br>";
echo "Continent = Tous";
$result = mysqli_query($con,"SELECT * FROM congres");
while($row = mysqli_fetch_array($result))
{
echo "<br>";
echo "<br>";
$payscongres=$row['Pays'];
echo "$payscongres" ;
echo "<br>";
echo "<br>";
$url=$row['Adresse_web'];
$nomcongres=$row['Nom'];
echo "<a href=$url> $nomcongres</a>";
}
}
else
{
echo "Domaine = Tous";
echo "<br>";
echo "Continent = $continent";
$result = mysqli_query($con,"SELECT * FROM congres WHERE Continent='$continent'");
while($row = mysqli_fetch_array($result)){
echo "<br>";
echo "<br>";
$payscongres=$row['Pays'];
echo "$payscongres" ;
echo "<br>";
echo "<br>";
$url=$row['Adresse_web'];
$nomcongres=$row['Nom'];
echo "<a href=$url> $nomcongres</a>";
}
}
}
else
{
if ($continent=="Tous" || !isset($continent))
{
echo "Domaine = $domaine";
echo "<br>";
echo "Continent = Tous";
$sql="SELECT * FROM congres WHERE Domaine='$domaine'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
echo "<br>";
echo "<br>";
$payscongres=$row['Pays'];
echo "$payscongres" ;
echo "<br>";
echo "<br>";
$url=$row['Adresse_web'];
$nomcongres=$row['Nom'];
echo "<a href=$url> $nomcongres</a>";
}
}
else
{
echo "Domaine = $domaine";
echo "<br>";
echo "Continent = $continent";
$sql="SELECT * FROM congres WHERE (Domaine='$domaine' AND Continent='$continent')";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
echo "<br>";
echo "<br>";
$payscongres=$row['Pays'];
echo "$payscongres" ;
echo "<br>";
echo "<br>";
$url=$row['Adresse_web'];
$nomcongres=$row['Nom'];
echo "<a href=$url> $nomcongres</a>";
}
}
}
mysqli_close($con);

?>
<br>


<br>

<br>

<br>

</body></html>