<?php
 $host = "localhost";
 $user = "root";
 $pw = "";
 $bd = "mabdfilms";
 $con = mysqli_connect($host,$user,$pw,$bd);
 if(!$con){
    echo "Not connected";
 }

/*
 $dns = "mysql:host=localhost;dbname=mabdfilms";
 $username = "root";
 $pw = "";
 try{
     $bd = new PDO($dns,$username,$pw);
 }catch(PDOException $e){
    $message_erreur = "Erreur de base de donnees :";
    $message_erreur .= $e.getMessage();
    include("view/MessageErreur.php");
    exit();

 }*/
?>