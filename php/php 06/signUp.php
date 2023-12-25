<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add record</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Enter your name:</label>
        <input type="text" name="name"><br><br>
        <!-- check if the name is from four sylbes -->
        <?php
            // if($_POST)
            // {
            //     $_GLOBALS['flagName']=true;
            //     $name=$_POST['name'];
            //     $regx = '/^(?:[aeiouy]{1,2}[b-df-hj-np-tv-z]\s?){4}$/i';

            //     if(!preg_match($regx,$name))
            //     {
            //         $_GLOBALS['flagName']=false;
            //         echo('<p style="color:red;">The name must be from four sylbes</p>');
            //     }  
            // }

        ?>

        <label for="email">Enter your email:</label>
        <input type="email" name="email"><br><br>

        <label for="pass1">Enter your password:</label>
        <input type="password" name="pass1"><br><br>
        
        <label for="pass2">Re-Enter your passowrd:</label>
        <input type="password" name="pass2"><br><br>
        <!-- check if pass1!=pass2 and display an erros messgae -->
        <?php
            if($_POST && $_POST['pass1']!=$_POST['pass2'])
            {
                echo('<p style="color:red;">passowrds does not match</p>');
            }
        ?>

        <label for="date">Enter your dateOfBirth:</label>
        <input type="date" name="date"><br><br>

        <label for="num">Enter your PhoneNumber:</label>
        <input type="number" name="num"><br><br>

        <input type="submit" value="add Record!">
    </form>

<?php
require('config.php');

if ($_POST) {
    //[1]Get the user data
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $num=$_POST['num'];
    $date=$_POST['date'];
    $dateCreated=date('Y-m-d');
    $dateLastLogin=date('Y-m-d');

    //[]Check if the pass1 == pass2 && name is from four sylbes
    if($pass1==$pass2)//&& $_GLOBALS['flagName']==true)
    {

    //[2]Prepare the query
    $sql = "INSERT INTO admin (name,email,password,phone,dateOfBirth,dateCreated,dateLastLogin)
    VALUES ('$name','$email','$pass1','$num','$date','$dateCreated','$dateLastLogin')";
    $stmt = $conn->prepare($sql);


    //[3]Trying to execute 
    try {
        $stmt->execute();
        echo "record inserted successfully!";
    }
    
    //[4]Catch any error
    catch (PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    }
    
    //[5]End the connection
    $conn = null;
    
}
?>
</body>
</html>