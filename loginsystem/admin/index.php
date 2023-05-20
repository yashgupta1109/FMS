<?php session_start(); 
include_once('../includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
  $adminemail=$_POST['email'];
//   $pass=md5($_POST['password']);
  $pass=($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE email='$adminemail' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid email or password');</script>";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
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
        <title>Admin Login | JSSATEN-SIM</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
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
<h2 align="center">Admin Login</h2>
<hr />
    <!-- <h3 class="text-center font-weight-light my-4">Admin Login</h3></div> -->
                                    <div class="card-body">
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="email" type="text" placeholder="Email"  required/>
<label for="inputEmail">Email</label>
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
                                        <div class="small"><a href="../index.php">Back to Home Page</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?php include('../includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
