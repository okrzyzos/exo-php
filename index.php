<?php  


 $i = 0;
while ($i <= 10) {
    echo $i++; 
}

echo '<br>';
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
for ($i = 0; $i <= 10; $i+=2) {
    echo $i;
}
echo '<br>';

for ($i=0; $i < 10; $i++)
{
    echo $i*$i;
}


$nom = "dupont";
$prenom = "olivier";
 
echo  $prenom." ".$nom;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet"/>

    <title>Document</title>
</head>
<body>
    
</body>
</html>



<ul>
	<li>fruits</li>
		<ul>
			<li>pommes</li>
			<li>poires</li>
			<li>banane</li>
                               
		</ul>

	<li>vehicules</li>
		<ul>
			<li>voiture</li>
			<li>moto</li>
			<li>avion</li>
                               
		</ul>
	<li>pays</li>
		<ul>
			<li>france</li>
			<li>bresil</li>
			<li>belgique</li>
                               
		</ul>
</ul>
