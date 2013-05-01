<?php 
session_start();
//connect.php
$server	    = 'localhost';
$username	= 'a4913461_rohit';
$password	= '!2()!~!!t';
$database	= 'a4913461_ithc';

if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
?>