<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Addition 

if(isset($_POST['add']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $subjectalloted=$_POST['subjectalloted'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $dept=$_POST['dept'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);

if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
}
else{
    $msg=mysqli_query($con,"insert into faculty(fname,lname,email,designation,subjectalloted,password) values('$fname','$lname','$email','$designation','$subjectalloted','$password', '$mobile', '$dept',)");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'manage-faculty.php'; </script>";
}
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
    <title>Add Faculty | JSSATEN-SIM</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">



                    
                    <h1 class="mt-4">Add New Faculty</h1>
                    <hr>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Faculty</li>
                    </ol>
                    <div class="card mb-4">
                        <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>First Name</th>
                                        <td><input class="form-control" id="fname" name="fname" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td><input class="form-control" id="lname" name="lname" type="text"
                                                 required /></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Email</th>
                                        <td><input class="form-control" id="email" name="email" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td><input class="form-control" id="designation" name="designation" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <th>Subject Allotted</th>
                                        <td><input class="form-control" id="subjectalloted" name="subjectalloted" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td><input class="form-control" id="password" name="password" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td><input class="form-control" id="mobile" name="mobile" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <th>Department</th>
                                        <td><input class="form-control" id="dept" name="dept" type="text"
                                                 required /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align:center ;"><button type="submit"
                                                class="btn btn-primary btn-block" name="add">Add</button></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <?php } ?>

                </div>
            </main>
            <?php include('../includes/footer.php');?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
