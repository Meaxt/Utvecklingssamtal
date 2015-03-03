<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "utvecklingsamtal");


$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$sql = "SELECT elever.namn, sal.sal FROM samtal, elever, sal WHERE samtal.ElevID=elever.id AND samtal.salID=sal.id";        
        
        
$stmt = $dbh->prepare($sql);
$stmt->execute();
$samtal = $stmt->fetchAll();

var_dump($samtal);
foreach ($samtal as $sam) {
    echo $sam["0"]." ";
    echo $sam["1"];
    echo '<br>';
    
}


?>


