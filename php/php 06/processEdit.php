<?php
require('config.php');
    if($_POST && isset($_POST['id'])) 
    { 
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $passowrd=$_POST['password'];
        $num=$_POST['num'];
        $date=$_POST['date'];

        $sql = "UPDATE admin SET name = '$name',email= '$email',password= '$passowrd',phone='$num',date='$date'  WHERE id = '$id'";
        $stmt = $conn->prepare($sql);

        try{
            $stmt->execute();
            echo('updated sucessufully!');
        }
        catch(PDOException $e){
            echo('error: ');
            echo($e->getMessage());
        }
        header('Location:admin.php');

    }
    else
    {
        echo('error in the id or the post...');
    }
?>