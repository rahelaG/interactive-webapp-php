<?php
include ("conect.php");
$nume=$_POST['nume'];
$email=$_POST['email'];
$mesaj=$_POST['mesaj'];


$sql="insert into comentarii values('','$nume', 
'$email','$mesaj')";
if(mysqli_query($link,$sql)){
    header('location:contact.php');
    exit;
} else echo"Eroare!";
?>