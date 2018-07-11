<meta charset="utf-8">
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if (isset($_SESSION['username']))
{

unset($_SESSION['username']);
}
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
<meta http-equiv="Content-Type"
content="text/html;charset=UTF-8">
<title>
logout
</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="mainLayout">
<div class="content">
<h3><center> logout now.....  <br> </h3>

<script type="text/javascript">
setTimeout(function () {
window.location.href = "http://localhost:8080/IHSAN_CRM/index.php";
}, 2000);
</script>
</div>
<div class="footer">

</div>
</div>
</body>
</html>