<?php 
function setComments($conn) 
{ 
 $msg = ''; 
 if(isset($_POST['commentSubmit'])) 
 { 
  $uid = $_POST['userid']; 
  $message = $_POST['comments'];   
  $sql = "insert into tblcomment(userid, comments) values('$uid','$message')"; 
  $result = $conn->query($sql); 
 } 
} 
?> 