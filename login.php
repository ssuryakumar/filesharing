<?php
session_unset();
?>
<!DOCTYPE html>
<head>
    <title>LOGIN :</title>
</head>
<body>
    <form method="post" action="admin.php">
        <p>Username :
        <input type="text" name="admin" />
        </p>
        <p>Password :
        <input type="password" name="pass" />
        </p>
        <input type="submit" name="submit" value="submit" />
    </form>
</body>