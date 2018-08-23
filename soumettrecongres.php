<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>congres</title>

</head>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>


  
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
<form method="post" action="soumettrecongres.php"><br>
Nom du congrès &nbsp; &nbsp;<input name="nom">
<br>
<br>
Adresse
url du congrès &nbsp; &nbsp; &nbsp; &nbsp; <input name="adresse"> <br>
<br>
&nbsp; Domaine: &nbsp; &nbsp;
<select name="domaine">
  <option></option>
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
&nbsp; Continent: &nbsp;&nbsp;
<select name="continent"><option></option><option>Afrique</option><option>Amerique du Nord</option><option>Amerique du Sud</option><option>Asie</option><option>Europe</option><option>Oceanie</option></select>
<br>
<br>
&nbsp; &nbsp;Pays: &nbsp; &nbsp; <input name="pays">
<br>
<br>
&nbsp; Date du congrès &nbsp;
<select name="jour"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
<select name="mois"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select>
<select name="annee"><option></option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option></select>
<br>
<br>
<br>
<input name="envoyer" type="submit"><br>
</form>
<?php $adresse = $_POST['adresse'];
$continent = $_POST['continent'];
$pays = $_POST['pays'];
$nom = $_POST['nom'];
$domaine = $_POST['domaine'];
$annee = $_POST['annee'];
$mois = $_POST['mois'];
$jour = $_POST['jour'];
$envoyer = $_POST['envoyer'];
$date = $annee."-".$mois."-".$jour ;
if (isset($envoyer))
{
if ( $adresse!="" & $continent!="" & $domaine!="" & $annee!="" & $mois!="" & $jour!="" & $pays!="" & $nom!="")
{
$con=mysqli_connect("localhost","id528441_jpasfrucje1","gpGq7JuYSDsB","id528441_jpasfrucje1"); 
if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$sql="INSERT INTO congres (Nom, Continent, Pays, Domaine, Adresse_web, Date)
VALUES ('$nom', '$continent','$pays', '$domaine','$adresse','$date')";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
else
{
echo "Le congres a bien ete enregistre, Merci!";
echo "Si vous souhaitez effacer votre entree, merci de nous envoyer un mail precisant le nom du congres!";
}
mysqli_close($con);
}
else {
echo "Merci de remplir tous les champs!";
}
}
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

</body></html></body></html>