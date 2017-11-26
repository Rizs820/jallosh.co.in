<?php
include('dbcon.php');

$id=$_POST['id'];

mysql_query("delete from dataregister where sysid='$id'") or die(mysql_error());



?>