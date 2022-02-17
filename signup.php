

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Elibrary</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<body>
    <!------MENU SECTION START-->
<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >

                    <img src="assets/img/logo.png" />
                </a>

            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
  <li><a href="adminlogin.html">Admin Login</a></li>
                            <li><a href="signup.php">User Signup</a></li>
                             <li><a href="index.html">User Login</a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">User Signup</h4>
                
                            </div>

        </div>
             <div class="row">
           
<div class="col-md-9 col-md-offset-1">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           SINGUP FORM
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" action="signup.php" onSubmit="return formvalidate();">
<div class="form-group">
<label>Enter Full Name</label>
<input class="form-control" type="text" name="fullname" id="fullname" autocomplete="off" required />
</div>


<div class="form-group">
<label>Mobile Number :</label>
<input class="form-control" type="text" name="mobileno" id="mobileno" maxlength="10" autocomplete="off" required />
</div>
                                        
<div class="form-group">
<label>Enter Email</label>
<input class="form-control" type="email" name="emailid" id="emailid" onBlur="checkAvailability()"  autocomplete="off" required  />
   <span id="user-availability-status" style="font-size:12px;"></span> 
</div>

<div class="form-group">
<label>Enter Password</label>
<input class="form-control" type="password" name="password" id="password" autocomplete="off" required  />
</div>

<div class="form-group">
<label>Confirm Password </label>
<input class="form-control"  type="password" name="confirmpassword" id="confirmpassword" autocomplete="off" required  />
</div>
 <button type="submit" name="submit" value="signup"  class="btn btn-danger" id="submit">Register Now </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
       <section class="footer-section">
        
    </section>    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    <script>
function formvalidate(){
var mob = document.getElementById('mobileno').value;

var regexmobile = /^[6-9]{1}[0-9]{9}$/;

if(!regexmobile.test(mob)){
alert("please enter only 10 digit mobile no..");
return false;
}


};
</script>

    <?php
	if(isset($_POST['submit']))
			{
	
				$fname=$_POST['fullname'];
				$mno=$_POST['mobileno'];
				$email=$_POST['emailid'];
				$pass=$_POST['password'];
				
	$con= new mysqli("localhost","root","","elibrary");
	$sql = "INSERT INTO tblstudents(FullName,EmailId,MobileNumber,Password,Status) VALUES ('$fname','$email','$mno','$pass','1')";
	$exe_query=mysqli_query($con,$sql);
	$con->close();
			echo '<script>
			window.location.href="index.html";
	</script> ';
	}
	?>
</body>
</html>
