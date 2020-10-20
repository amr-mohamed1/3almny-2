<?php 

$dsn = "mysql:host=ec2-54-157-234-29.compute-1.amazonaws.com
;dbname=ds65hkqg6qgjh";
$user = "ljgeopkddocela";
$pass="484872fc139e3297ee54d183582b96430c7b6a204a4489d65798e3011624a675";

try{
    $con = new PDO($dsn , $user , $pass);
   
}catch(PDOException $e){
    echo "error" . $e->getMessage();
}

?>
