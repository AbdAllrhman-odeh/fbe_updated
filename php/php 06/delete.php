<?php
require('config.php');
    if($_GET && isset($_GET['id']))
    {
        $id=$_GET['id'];
        
        $sql="DELETE FROM admin WHERE id = '$id'";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location:admin.php');    
    }
    else
    {
        echo('error in the method or the id is not set');
    }
?>