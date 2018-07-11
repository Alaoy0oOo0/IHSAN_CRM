<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IhsanCRM | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
   <?php
	include"connect.php";

// check if user comming from http post requist

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$user_name=$_POST['user_name'];
		$user_password=$_POST['user_password'];
	
	
// check if the user exist in database
		$stmt = $db->prepare("select  * FROM  customer WHERE user_name = ? AND user_password= ?  ");
		$stmt->execute(array($user_name, $user_password));

        $row = $stmt->fetch();
		$count= $stmt->rowCount();
		if($count > 0)
		  { 
				  session_start();
				  $_SESSION['user_name']=$user_name;
				   
		       	
				  header('location:http://localhost:8080/IHSAN_CRM/main_page_c.php');
				  exit();
				
			 
	    }	  
		else
		{
			
			echo "<center> <h5>عذراً لقد ادخلت  اسم المستخدم وكلمة المرور بطريقة خاطئة الرجاء المحاولة مرةً اخرى            </h5></center>";
		}
 	}
?>
  <body class="hold-transition login-page" dir="rtl">
    <div class="login-box">
      <div class="login-logo">
        <a href="http://localhost:8080/IHSAN_CRM/main_page_c.php"><b>IHSAN</b>CRM</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">سجل دخولك لتبداء الجلسه</p>
        <form action="http://localhost:8080/IHSAN_CRM/main_page_c.php" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="الايميل">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="كلمة السر">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> تذكرني
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button action="http://localhost:8080/IHSAN_CRM/main_page_c.php" type="submit" class="btn btn-primary btn-block btn-flat">تسجيل الدخول</button>
            </div><!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->

        <a href="#">نسيت كلمة السر</a><br>
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
