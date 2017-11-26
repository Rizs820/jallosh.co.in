<?php
include('dbcon.php');

$id=$_POST['id'];

mysql_query("delete from user where user='$id'") or die(mysql_error());



?>