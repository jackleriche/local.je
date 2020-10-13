<!DOCTYPE html>
<html lang="en">
<?php
    require_once("head.php");
?>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // grab the values
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "$username $password";
    }


?>
</body>
</html>

