<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IhsanCRM | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://localhost:8080/IHSAN_CRM/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost:8080/IHSAN_CRM/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost:8080/IHSAN_CRM/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page" >
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>IHSAN</b>CRM</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Please Enter Your User Name & Password </p>
        <form  method="post">
		 <fieldset>
		  <?php
	include"config.php";

// check if user comming from http post requist

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
				 
		$username=$_POST['username'];
		$password=$_POST['password'];
	
	
// check if the user exist in database
		$stmt = $db->prepare("select  * FROM   employ WHERE user_name = ? AND password= ?  ");
		$stmt->execute(array($username, $password));

        $row = $stmt->fetch();
		$count= $stmt->rowCount();
		if($count > 0)
		  { 
				  session_start();
				  $_SESSION['username']=$user_name;
				  
		       	
				  header('location:main_page_e.php');
				  exit();
				
			 
	    }	  
		else
		{
			
			echo "<center> <h5>sorry your user name or password is wrong please try again with correct username & password            </h5></center>";
		}
 	}
?>
          <div class="form-group has-feedback">
            <input  autofocus class="form-control" action="<?php echo $_SERVER['PHP_SELF'] ?>"
                             type="text" name="username"
                             placeholder="username" autocomplete="off " required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input  class="form-control"  action="<?php echo $_SERVER['PHP_SELF'] ?>" 
                            method="POST" type="password" name="password" placeholder="password" autocomplete="off " required >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-4">
             <button type="submit" class="btn btn-primary btn-block btn-flat"  value="دخول" >sign in</button>
            </div><!-- /.col -->
          </div>
		 </fieldset>
        </form>

        <!-- /.social-auth-links -->

       
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="http://localhost:8080/IHSAN_CRM/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/iCheck/icheck.min.js"></script>
    
  </body>
</html>
