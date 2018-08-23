<?php // on spécifie le type de document que l'on va créer (ici une image au format PNG
    $domaine=$_GET['domaine'];
    header ("Content-type: image/jpeg");
    $image = ImageCreateFromJpeg ("images/ContinentsoftheWorld.jpg");
    $color = imagecolorallocate($image, 0, 0, 0);
 // Nombre de congres par continent
 	$con=mysqli_connect("localhost","id528441_jpasfrucje1","gpGq7JuYSDsB","id528441_jpasfrucje1"); 
 	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    $continents=array("Afrique","Amerique du Sud", "Amerique du Nord","Asie", "Europe", "Oceanie");
    $xs=array(320,150,75,450,300,550);
    $ys=array(170,200,80,80,60,220);
    if ($domaine=="Tous" || !isset($domaine) || $domaine==""){
		for ($i=0;$i<=5;++$i) {
		$count=0;
		$result = 0;
		$result = mysqli_query($con,"SELECT * FROM congres WHERE Continent='$continents[$i]' ");
		while($row = mysqli_fetch_array($result)){
			$count=count($row['Continent'])+$count;
		  	}
		imagestring($image, 100, $xs[$i], $ys[$i],$count, $color);
		}
	}
	else {
		for ($i=0;$i<=5;++$i) {
		$count=0;
		$result = 0;
		$result = mysqli_query($con,"SELECT * FROM congres WHERE (Continent='$continents[$i]' AND Domaine='$domaine') ");
		while($row = mysqli_fetch_array($result)){
			$count=count($row['Continent'])+$count;
		  	}
		imagestring($image, 100, $xs[$i], $ys[$i],$count, $color);
		}
	}

  	ImageJpeg($image);
?>