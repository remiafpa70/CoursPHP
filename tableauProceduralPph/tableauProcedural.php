<?php

echo "<hr>";
$etudiants = array("Moussa","Jeau","Nicolas","Macron");

for ($i=0; $i < count($etudiants); $i++) { 
    echo $etudiants[$i];
    echo "</br>";
}

echo "<hr>";
$infos = array("Prenom"=>"Moussa", "Nom"=> "Camara", "Age"=> 28, "Adresse"=>"Paris");
foreach ($infos as $key=>$value){
    echo $key. "===>";
    echo $value."<br>";
}
echo "<hr>";

?>