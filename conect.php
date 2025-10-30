<?php
$link=mysqli_connect("localhost","root","") or
die("Nu ma pot conecta la server");
mysqli_select_db($link,"succes") or
die("Nu pot selecta BD");
?>