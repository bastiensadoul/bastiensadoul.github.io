<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>upload.php</title>

  
</head><body>



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
<br />
<br />
<br />
<br />




<?php $emailaddress="jpas@jpas.fr";
$emailsubject="Nouvelle note";
$headers ='From: "jpas"'; 
$extensions = array('.doc', '.docx', '.odt', '.odp');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
$taille_maxi = 500000;
$msg = "";
while (list($key, $val) = each($_POST)) {
$msg .= "$key : $val\n";
} 

if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
	{
     $erreur = 'Vous devez uploader un fichier de type doc, docx, odt, odp';
}	

if($taille>$taille_maxi)
	{
     $erreur = 'Le fichier est trop gros...';
}


if(isset($_FILES['avatar']))
	{ 
	$dossier = 'upload/';
	$fichier = basename($_FILES['avatar']['name']);
}

if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
	$fichier = strtr($fichier,
     	'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
     	'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 
//On remplace les lettres accentutées par les non accentuées dans $fichier.
//Et on récupère le résultat dans fichier
 
//En dessous, il y a l'expression régulière qui remplace tout ce qui n'est pas une lettre non accentuées ou un chiffre
//dans $fichier par un tiret "-" et qui place le résultat dans $fichier.
	$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
	
	if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		{
		echo 'Upload effectué avec succès !';
		echo 'Merci d\'avoir soumis votre note !';
		mail($emailaddress, $emailsubject, $msg, $headers); 
	}

	else //Sinon (la fonction renvoie FALSE).
	{
	echo 'Echec de l\'upload ! Réessayez.';
	echo 'Si l\'upload ne fonctionne pas une 2ème fois, contactez nous par mail!';
	}
}

else
{
     echo $erreur;
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


<br>

<br>

</body></html>