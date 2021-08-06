<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:$ref");
?>




<br><br><br><br><br><br><br><br><br><br>
<center>
<h1><b> This exam is already solve by you </b></h1>
</center>