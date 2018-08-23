<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
  
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  
  <meta name="description" content="Your description goes here" />

  
  <meta name="keywords" content="your,keywords,goes,here" />

  
  <meta name="author" content="Your Name" />

  
  <link href="http://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css" />

  
  <link rel="stylesheet" type="text/css" href="JPAS.css" title="JPAS" media="all" />
  <title>JPAS</title>

  
</head><body class="light blue smaller freestyle01">
<div id="layout">
<div class="row">
<div class="col c12 aligncenter"> <img style="width: 940px; height: 193px;" alt="" src="images/LOgo12.png" /></div>
</div>
<div class="row">
<div style="width: 178px;" class="col c2 alignleft">
<ul class="menu">
<li><a href="index.html">ACCUEIL</a></li>
<li><a href="journal.html">LE JOURNAL </a></li>
<li><a href="sante.html">SANTE </a></li>
<li><a href="environnement.html">ENVIRONNEMENT</a></li>
<li><a href="physique.html">PHYSIQUE</a></li>
<li><a href="chimie.html">CHIMIE</a></li>
<li><a href="agronomie.html">AGRONOMIE</a></li>
<li><a href="univers.html">UNIVERS</a></li>
<li><a href="shs.html">S. HUMAINES ET SOCIALES</a></li>
<li><a href="controverses.html">CONTROVERSES</a></li>
<li><a href="partenariats.html">PARTENARIATS</a></li>
<li><a href="congres.html">CONGRES</a></li>
<li class="selected"><a href="lienspostdocs.html">LIENS POST-DOCS</a></li>
<li><a href="soumettre.html">SOUMETTRE</a> </li>
</ul>
</div>
<b><u><span style="font-family: Times;" lang="FR"><br />
</span></u></b>
<b><u><span style="font-family: Times;" lang="FR" /></u></b><br />
<table style="text-align: left; width: 732px; height: 352px;" cellpadding="2" cellspacing="2">
  <tbody>
    <tr align="center">
      <td colspan="2" rowspan="1" style="vertical-align: top;">
      <h3>Liens Post-docs</h3>
      <div style="text-align: left;"><br />
      <div style="text-align: center;"><br />
      <br />
      <br />
      <br />
Votre lien nous a bien été transmis!<br />
      <br />
      </div>
      <form method="post" action="mailpostdoc.php" enctype="multipart/form-data">
        <div style="text-align: center;">&nbsp; </div>
      </form>
      <div style="text-align: center;">
      <h3><?php $emailaddress="jpas@jpas.fr";
$emailsubject="Lien Post-doc";
$headers ='From: "jpas"';
$msg = $_POST['postdoc'];
mail($emailaddress, $emailsubject, $msg, $headers);
echo('MERCI!');
?>
      </h3>
      </div>
      <div style="text-align: center;"> <br />
      <br />
Pour revenir aux liens post-docs, cliquer <a href="lienspostdocs.html">ici</a>
! </div>
      <br />
      <br />
      <br />
      <br />
      </div>
      </td>
    </tr>
  </tbody>
</table>
<div id="footer" class="row">
<div class="col c12 aligncenter">
<h3><a href="mailto:jpas@jpas.fr">© 2013 JOURNAL PARTICIPATIF DES
SCIENCES</a></h3>
<p><a href="mailto:bgeffroy@jpas.fr">Benjamin
Geffroy</a>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp; <a href="mailto:bsadoul@jpas.fr">Bastien
Sadoul</a></p>
</div>
</div>
</div>
</div>

</body></html>