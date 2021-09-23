<?php 
session_start();
$_SESSION['userid']='plus2net';
$_SESSION['name']='Ronn';

echo "Welcome $_SESSION[userid]";
echo "<br> welcome $_SESSION[name]";

?>