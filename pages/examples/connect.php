<?php

$conn = mysql_connect("localhost","root","")
 or die ('colud not connect to server');
$db = mysql_select_db("a")
 or die('could not select database');
 mysql_query("SET NAMES 'utf8'");


?>