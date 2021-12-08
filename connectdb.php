<?php 

try{

    $pdo = new PDO('mysql:host=localhost;charset=utf8;dbname=astha_db','root','');
   
    //echo 'Connection Successfull';

}catch(PDOException $f){

    echo $f->getmessage();

}



?>