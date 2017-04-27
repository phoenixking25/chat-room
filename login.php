<?
session_start();
$_SESSION['usrname'] = strip_tags($_POST['usrname']);
$_SESSION['color'] = strip_tags($_POST['color']);
header("location: index.php")
?>