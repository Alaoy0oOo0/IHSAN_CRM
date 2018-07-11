<form  method="POST">
                <fieldset>
             <div class="well col-md-5 center login-box">
               	  <div class="clearfix"></div>
                    <div class="input-group input-group-lg">
                      

                    </div>
                    
<?php
	include"connect.php";

// check if user comming from http post requist

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
	
	
// check if the user exist in database
		$stmt = $db->prepare("select  * FROM  admin WHERE user_name = ? AND password= ?  ");
		$stmt->execute(array($username, $password));

        $row = $stmt->fetch();
		$count= $stmt->rowCount();
		if($count > 0)
		  { 
				  session_start();
				  $_SESSION['username']=$username;
				  
		       	
				  header('location:main_page_a.php');
				  exit();
				
			 
	    }	  
		else
		{
			
			echo "<center> <h5>عذراً لقد ادخلت  اسم المستخدم وكلمة المرور بطريقة خاطئة الرجاء المحاولة مرةً اخرى            </h5></center>";
		}
 	}
?>
                    <div class="input-group input-group-lg">
                    
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input  autofocus class="form-control" action="<?php echo $_SERVER['PHP_SELF'] ?>"
                             type="text" name="username"
                             placeholder="username" autocomplete="off " required />
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input  class="form-control"  action="<?php echo $_SERVER['PHP_SELF'] ?>" 
                            method="POST" type="password" name="password" placeholder="password"               		   							autocomplete="off " required >
                    </div>
                    <div class="clearfix"></div>
                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                  

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary"  value="دخول" >دخــول</button>
                  </p>
                  
                </fieldset>
                
            </form>
          
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->
  
            <?php
?>
