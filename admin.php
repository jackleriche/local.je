<!DOCTYPE html>
<html lang="en">
<?php
    require_once("head.php");
?>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" placeholder="Username" name="username" />
        <input type="password" placeholder="Password" name="password" />
        <input type="submit" value="Login" />
    </form>
</body>
</html>