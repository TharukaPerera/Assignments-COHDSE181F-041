<?php 
$conn = mysqli_connect('localhost','root','','guest_book'); 
if(!$conn) 
{ die("Connection Failed:".mysqli_connect_error()); 
} 
?> 