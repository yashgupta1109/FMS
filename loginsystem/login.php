<?php session_start(); 
include_once('includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT id,fname,users.status FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
$status=$num['status'];
if($num>0)
{
    if($status==0)
    {
echo "<script>alert('Verify  your Email Id by clicking  the link In your mailbox');</script>";
    }
    else{
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
header("location:welcome.php");
    }
}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Student Login | JSSATEN-SIM</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script>
        function showpass() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
    </head>
    <!-- <body class="bg-primary"> -->
    <body>

    <?php include_once('includes/header.php');?>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

<div class="card-header">
<h2 align="center">Student Login</h2>
<hr />
    <!-- <h3 class="text-center font-weight-light my-4">User Login</h3></div> -->
                                    <div class="card-body">
                                        
                                        <form method="post">

<!-- <div class="login">
<span>Please select your Profile:</span>
<input type="radio" class="s1" name="login" value="student">
<label for="student">Student</label>
<input type="radio" class="s1" name="login" value="faculty">
<label for="faculty">Faculty</label>
<input type="radio" class="s1" name="login" value="admin">
<label for="admin">Admin</label>
</div> -->
                                            
<div class="form-floating mb-3">
<input class="form-control" name="uemail" type="email" placeholder="name@example.com" required/>
<label for="inputEmail">Email address</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
<label for="inputPassword">Password</label>
<input type="checkbox" onclick="showpass()"> Show Password
</div>


<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="password-recovery.php">Forgot Password?</a>
<button class="btn btn-primary" name="login" type="submit">Login</button>
</div>
</form>
</div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
                                          <div class="small"><a href="index.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?php include('includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
