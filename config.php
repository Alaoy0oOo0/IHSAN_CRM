<?php



$conn = mysql_connect("localhost","root","")
 or die ('colud not connect to server');

$db = mysql_select_db("a")
 or die('could not select database');

 mysql_query("SET NAMES 'utf8'");

?>






   <?php
$dsn = 'mysql:host=localhost;dbname=a';
$user = 'root';
$pass = '';
$option = array(
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
);
try{
$db = new PDO($dsn, $user, $pass, $option);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '';
}
catch(PDOException $e) {
       echo 'failed to connect' .$e->getMessage();

}
?>


