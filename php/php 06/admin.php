<?php
    require('config.php');

    $sql="SELECT * FROM admin";
    $stmt=$conn->prepare($sql);

    try{
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo('<table border=1px style="border-collapse:no-collapse; ">');
        echo('<tr><td>ID</td><td>Full Name</td><td>Email</td><td>Password</td><td>Date Created</td>
        <td>Date Last Login</td><td>Edit</td><td>Delete</td></tr>');
        foreach ($result as $row) {
            echo "<tr> <td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>"
             . $row['email'] .'</td><td>'.$row['password']. "</td><td>".$row['dateCreated']."</td><td>".$row['dateLastLogin']."</td><td><a href='edit.php?id={$row['id']}'>edit</a></td><td><a href='delete.php?id={$row['id']}'>delete</a></td></tr>";
        }

        echo('</table>');
        
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
