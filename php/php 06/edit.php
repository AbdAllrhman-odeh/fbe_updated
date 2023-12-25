<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit page</title>
</head>
<body>
    <?php
    require('config.php');
        if($_GET && isset($_GET['id']))
        {
            $id=$_GET['id'];

            $sql = "SELECT * FROM admin WHERE id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                ?>
                <form action='processEdit.php?id={$id}' method='POST'>
                <input type='hidden' name='id' value='<?=$result['id']?>'>

                <label for='name'>Name:</label>
                <input type='text' name='name' value='<?=$result['name']?>'><br>
                
                <label for='email'>email:</label>
                <input type='text' name='email' value='<?=$result['email']?>'><br>
                
                <label for='passowrd'>passowrd:</label>
                <input type='text' name='passowrd' value='<?=$result['password']?>'><br>
                 
                <label for='date'>Date Of birth:</label>
                <input type='date' name='date' value='<?=$result['dateOfBirth']?>'><br>

                <label for='number'>number:</label>
                <input type='number' name='num' value='<?=$result['phone']?>'><br>

                <input type='submit' value='Edit'>
              </form>
              <?php
            }
            else
            {
                echo('the id is not correct');
            }
        }
        else
        {
            echo('error:/');
        }
    ?>
</body>
</html>