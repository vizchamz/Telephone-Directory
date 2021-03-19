<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Telephone Directory</title>
    </head>
    <body>
        <?php
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if ($username == 'admin' && $password == '123') {
            header("Location: ../common/addNewContact.html");
            exit();
        }
        else {
            echo "Invalid Credentials";
        }
        
        ?>
    </body>
</html>