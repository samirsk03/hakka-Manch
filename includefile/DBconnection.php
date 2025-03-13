<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Cache-control: No-Cache");
header("Pragma: No-Cache");

//$con = mysqli_connect("localhost","root","","shikshanhakka_db");
$con = mysqli_connect("localhost","shikshan_user","Gp)E6Z[f+Fds]v#!$~","shikshan_db");
#if (!$con) {
#    die('Could not connect: ' . mysql_error());
#}

if(mysqli_connect_errno())

{
	echo " could not connect to MySQLi: ".mysqli_connect_error();
}
session_start();
 $sid= session_id();
$_SESSION['db_connection']=$con;

class DB{ 


}
?>