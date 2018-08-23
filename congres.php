<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44975466-1', 'jpas.fr');
  ga('send', 'pageview');

</script>

  
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  
  <meta name="description" content="Journal participatif des Sciences" />

  
  <meta name="keywords" content="Journal,participatif,Sciences,docteurs" />

  
  <link rel="icon" type="image/png" href="/images/Logopetit1.png" />

  
  <meta name="author" content="Your Name" />

  
  <link href="http://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css" />

  
  <link rel="stylesheet" type="text/css" href="JPAS.css" title="JPAS" media="all" /><title>JPAS</title></head><body class="light blue smaller freestyle01">
<div id="layout">
<div class="row">
<div class="col c12 aligncenter"> <img style="width: 940px; height: 193px;" alt="" src="images/LOgo12.png" /><br />
</div>
</div>
<div class="row">



<div style="width: 178px;" class="col c2 alignleft">
	<ul class="menu">
	  <li><a href="index.html">ACCUEIL</a></li>
	  <li><a href="journal.html">LE JOURNAL </a></li>

	  <li><a href="soumettre.html">SOUMETTRE</a> </li>
	  <li class="selected"><a href="congres.html">CONGRES</a></li>
	  <li><a href="lienspostdocs.html">LIENS POST-DOCS</a></li>

	  <li ><a href="domaines.html">DOMAINES SCIENTIFIQUES</a></li>
	  <li>
		  <ul class="subpages">
		  	<li><a href="sante.html">Santé </a></li>
		  	<li><a href="physiologie.html">Physiologie </a></li>
		  	<li><a href="environnement.html">Environnement</a></li>
		  	<li><a href="physique.html">Physique</a></li>
		  	<li><a href="chimie.html">Chimie</a></li>
		  	<li><a href="agronomie.html">Agronomie</a></li>
		  	<li><a href="univers.html">Univers</a></li>
		  	<li><a href="shs.html">S. Humaines et Sociales</a></li>
		  	<li><a href="si.html">S. de L'inGénieur</a></li>
		  </ul>
	  </li>
	  
	  <li><a href="controverses.html">CONTROVERSES</a></li>
	  <li><a href="partenariats.html">PARTENARIATS</a></li>
	
	
	</ul>
</div>






<br />
<table style="text-align: left; width: 732px; height: 352px;"cellpadding="1" cellspacing="1"><tbody><tr align="center"><td style="vertical-align: top; text-align: center;">
</td>
<td style="vertical-align: top;">
<h3>CONGRES</h3>
<br />
<br />
Voici l'ensemble des congrès répertoriés par les utilisateurs de JPaS.
Vous pouvez choisir votre domaine de prédilection ainsi qu'un continent
donné. Bonne navigation!<br />
<br />
<font size="3">
-----  Si vous souhaitez répertorier un nouveau congrès merci de suivre ce <a href="soumettrecongres.php">lien</a> !   -----
</font>
<br />
<br />
<br />

<form>
&nbsp; Domaine: &nbsp;&nbsp;
  <select name="domaine" onchange='this.form.submit()'>
  <option></option>
  <option>Tous</option>
  <option>Sante</option>
  <option>Physiologie</option>
  <option>Environnement</option>
  <option>Physique</option>
  <option>Chimie</option>
  <option>Agronomie</option>
  <option>Univers</option>
  <option>Sciences Humaines et Sociales</option>
  <option>Sciences de l'ingenieur</option>
  <option>Cultures et Litteratures</option>
  </select>
&nbsp; <br>
  <br>
<noscript><input type="submit" value="Submit"></noscript>
</form>


<br>

<map name="mon_mapping"><area shape="circle" coords="320,170,50"href="congres.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Afrique" 
alt="Afrique" onClick="test('Afrique');"><area shape="circle" coords="150,200,50"href="congres.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Amerique du Sud" 
alt="Amerique du Sud" onClick="test('Amerique du Sud');"><area shape="circle" coords="75,80,50"
href="congres.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Amerique du Nord" 
alt="Amerique du Nord" onClick="test('Amerique du Nord');"><area shape="circle" coords="450,80,50"
href="congres.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Asie" 
alt="Asie" onClick="test('Asie');"><area shape="circle" coords="300,60,50"href="congres.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Europe" 
alt="Europe" onClick="test('Europe');"><area shape="circle" coords="550,220,50"href="congres.php?domaine=<?php $domaine = $_GET['domaine']; echo $domaine;?>&continent=Oceanie" 
alt="Oceanie" onClick="test('Oceanie');"></map>
<img style="width: 691px; height: 319px;" alt="continents" src="mapcreator.php?domaine=
<?php 
$domaine = $_GET['domaine'];
if (isset($domaine)){echo $domaine;
}
else {
echo 'Tous';
$domaine="Tous";
}
?>
"usemap="#mon_mapping">
<br>


&nbsp;
&nbsp;<br>



<br>

<?php 
$con=mysqli_connect("localhost","id528441_jpasfrucje1","gpGq7JuYSDsB","id528441_jpasfrucje1"); 
$continent = $_GET['continent'];
$domaine = $_GET['domaine'];

mysqli_query($con,"DELETE FROM congres WHERE Date< NOW()");

if ($domaine==""){$domaine="Tous";
}
if ($continent==""){$continent="Tous";
}

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo "Domaine = $domaine";
echo "<br>";
echo "Continent = $continent";
if ($domaine=="Tous" && $continent=="Tous"){
	$result = mysqli_query($con,"SELECT * FROM congres ORDER BY STR_TO_DATE(Date,'%Y-%m-%d')");
}	

if ($domaine=="Tous" && $continent!="Tous"){
	$result = mysqli_query($con,"SELECT * FROM congres WHERE Continent='$continent' ORDER BY STR_TO_DATE(Date,'%Y-%m-%d')");
}	

if ($domaine!="Tous" && $continent=="Tous"){
	$result = mysqli_query($con,"SELECT * FROM congres WHERE Domaine='$domaine' ORDER BY STR_TO_DATE(Date,'%Y-%m-%d')");
}	


if ($domaine!="Tous" && $continent!="Tous"){
	$result = mysqli_query($con,"SELECT * FROM congres WHERE (Domaine='$domaine' AND Continent='$continent') ORDER BY STR_TO_DATE(Date,'%Y-%m-%d')");
}	
while($row = mysqli_fetch_array($result))
{
	echo "<br>";
	echo "<br>";
	$payscongres=$row['Pays'];
	echo "$payscongres" ;
	echo "<br>";
	$url=$row['Adresse_web'];
	$nomcongres=$row['Nom'];
	$date=$row['Date'];
	$date = date("d-m-Y", strtotime($date));
	echo "<a target='_blank' href=$url> $nomcongres</a>  ($date)";
}

mysqli_close($con);

?>

</td>
</tbody></table>

<b><u><span style="font-family: Times;" lang="FR" /></u></b><br />
</div>
<div id="footer" class="row">
<div class="col c12 aligncenter">
<h3><a href="mailto:jpas@jpas.fr">© 2013 JOURNAL
PARTICIPATIF DES
SCIENCES</a>
 &nbsp; &nbsp; 
<a href="https://www.facebook.com/journalparticipatifdessciences" target="_blank">
<img style="width: 70px; height: 25px;" alt="" src="images/facebook.jpg" />	
</a>
</h3>
<p><a href="mailto:bgeffroy@jpas.fr">Benjamin
Geffroy</a>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp; <a href="mailto:bsadoul@jpas.fr">Bastien
Sadoul</a></p>
</div>
</div>
</div>

</body></html>