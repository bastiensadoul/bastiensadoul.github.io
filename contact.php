<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
  <title>adresse</title>

  
</head><body>
<br />

<?php //-----------------------------------------------------// 
// adresse mail // 

$fp = fopen("contacts.txt","a");  
$adresse= $_POST['adresse']; 
fwrite($fp, ";"); 
fwrite($fp, $adresse); 
fclose($fp); 
?>
<br />

<br />

</body></html>