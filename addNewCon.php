<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Telephone Directory</title>
    </head>
    <body>
        <?php
        
        $serverName = "localhost";
        $user = "root";
        $pass = "";
        $database = "telephoneDirectory";
        
        $conn = mysqli_connect($serverName, $user, $pass);
        
        if (!$conn) {
            die ("Connection failed".mysqli_connect_error());
        }
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $hometown = $_POST['hometown'];
        $tpnumber = $_POST['tpnumber'];
        
        
        mysqli_select_db($conn, $database) or die ("Unable to connect");
        
        $query = "INSERT into newconact VALUES (0, '$firstname', '$lastname' , '$hometown', '$tpnumber')";
        
        mysqli_query($conn, $query) or die ("Cannot Execute Query");
        
        mysqli_close($conn);
        
        ?>
        <h1>Record Inserted</h1>
    </body>
</html>