<?php
session_start();
$_SESSION['logged']=0;
header('Location:index.php');
echo'<p>LOGGING OUT</P>';

?>