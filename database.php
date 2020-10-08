<?php
$host='localhost';
$username='root';
$password='';
$conn=mysqli_connect($host,$username,$password,"crud");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>
