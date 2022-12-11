<?php

$DB = 'travusdb';
$idDB = 'root';
$passDB = '';

try{
   $travusDB = new PDO("mysql:host=localhost;dbname=$DB", $idDB, $passDB );
   $travusDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $travusDB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $pe){
    echo "Erreur: ". $pe->getMessage();
}


?>


















<?php

/*$passDB = 'MysqlDevelopment555@';*/

?>