<?php
   echo('Connection:');
   $servername="localhost";
   $username="root";
   $passowrd="";
   $dbname="mydb";

   try{
      $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      echo('<mark>connect success to the db</mark>');

   }
   catch(PDOException $e){
      echo('<mark>connection falied</mark>');
   }
?>
