

<?php
$username = "root";
$servername ="localhost";
$password = "";
$Db = "sign";

try{
$conn = new PDO("mysql:host = $servername; dbname=$Db", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo "Connection Successiful";

}catch(PDOException $e){

    echo "Connection failed". $e->getMessage();

}





?>