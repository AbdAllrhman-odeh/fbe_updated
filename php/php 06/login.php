<?php
   require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>signIn</title>
</head>
<body>
   <form action="" method="POST">
      <label for="email">Enter your email:</label>
      <input type="email" name="email"><br><br>

      <label for="password">Enter your password:</label>
      <input type="password" name="password"><br><br>
      <input type="submit" value="login!">
   </form>
   <?php
require('config.php');

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, email, password FROM admin WHERE email = '$email'";
    $stmt = $conn->prepare($sql);

    try {
        if ($stmt->execute())
         {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result)
            {
               if ($password === $result['password'])
               {
                  //correct pass
                 echo "welcome!your user id" . $result['id'];
                  $id=$result['id'];
                 //change the last time visted the website
                 $date=date('Y-m-d');
                 $updateSql = "UPDATE admin SET dateLastLogin = '$date' WHERE id = '$id'";
                 $updateStmt = $conn->prepare($updateSql);
                 $updateStmt->execute();
               }
               else
               {
                  //wrong email
                 echo "wrong email or password.";
               }
            }
            else
            {
               //wrong email
                echo "email is wrong<br>";
            }
         }
         else
         {
            //querey error
            echo "error 404<br>";
         }
    } catch (PDOException $e) {
        echo "Errrrrrror:".$e->getMessage();
    }

    $conn = null;
}
?>

</body>
</html>