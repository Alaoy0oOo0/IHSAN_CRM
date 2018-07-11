<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$customer_id=$_GET['customer_id'];
include"connect.php";


$query = mysql_query("delete from customer where customer_id=$customer_id")
or die (mysql_error());
header('location:show_coustmer.php');
					exit();
?>
</body>
</html>