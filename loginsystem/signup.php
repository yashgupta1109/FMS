<?php session_start();
require_once('includes/config.php');
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
      
    require 'vendor/autoload.php';

//Code for Registration 
if(isset($_POST['submit']))
{
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $department=$_POST['department'];
    $section=$_POST['section'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $urollno=$_POST['urollno'];
    $addno=$_POST['addno'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $status=0;
$activationcode=md5($email.time());
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);

$sql1=mysqli_query($con,"select id from users where urollno='$urollno'");
$row1=mysqli_num_rows($sql1);

$sql2=mysqli_query($con,"select id from users where addno='$addno'");
$row2=mysqli_num_rows($sql2);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
}
else if($row1>0)
{
    echo "<script>alert('urollno already exist with another account. Please try with other urollno');</script>";
}
else if($row2>0)
{
    echo "<script>alert('addno already exist with another account. Please try with other addno');</script>";
}
else{
    $msg=mysqli_query($con,"insert into users(year,semester,department,section,fname,lname,email,urollno,addno,password,contactno,activationcode,status) values('$year','$semester','$department','$section','$fname','$lname','$email','$urollno','$addno.','$password','$contact','$activationcode','$status')");

if($msg)
{
    
    
    $mail = new PHPMailer;
    // if(isset($_POST['send'])){
    
    
    // $femail=$_POST['femail'];
    
    // $row1=mysqli_query($con,"select email,password,fname from users where email='$femail'");
    // $row2=mysqli_fetch_array($row1);
    // if($row2>0)
    // {
    // $toemail = $row2['email'];
    $toemail = $email;
    // $fname = $row2['fname'];
    $subject = "Verify you Email";
    // $password=$row2['password'];
    $message = "Please click The following link For verifying and activation of your account <div style='padding-top:10px;'><a href='http://localhost/firstyear/loginsystem/email_verification.php?code=$activationcode'>Click Here</a></div>";
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers


    
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = '20it99@jssaten.ac.in';    // SMTP username
    $mail->Password = 'Password890@#'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to
    $mail->setFrom('20it99@jssaten.ac.in','JSS-SIM');
    $mail->addAddress($toemail);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    $bodyContent=$message;
    $mail->Subject =$subject;
    $bodyContent = 'Dear'." ".$fname;
    $bodyContent .='<p>'.$message.'</p>';
    $mail->Body = $bodyContent;
    if(!$mail->send()) {
    echo  "<script>alert('Message could not be sent');</script>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
       echo  "<script>alert('Registration successful, Please verify in the registered Email-Id');</script>";
    }
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    // }
    // else
    // {
    // echo "<script>alert('Email not register with us');</script>";   
    // }
    // }





//     $to=$email;
//     echo "<script>alert('Registered successfully');</script>";
//     $subject="Email verification (JSS-SIM)";
// $headers .= "MIME-Version: 1.0"."\r\n";
// $headers .= 'Content-type: text/html; charset=UTF-8"'."\r\n";
// $headers .= 'From:JSS-SIM | Feedback Interface <JSS-SIM>'."\r\n";
// $ms.="<html></body><div><div>Dear $fname,</div></br></br>";
// $ms.="<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
// <div style='padding-top:10px;'>< href='email_veraification.php?code=$activationcode'>Click Here</></div>
// <div style='padding-top:4px;'>Powered by <a href='#'>JSS-SIM</a></div></div>
// </body></html>";
// mail($to,$subject,$ms,$headers);
// echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
    // echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
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
    <title>Student Signup | JSSATEN-SIM</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    function checkpass() {
        if (document.signup.password.value != document.signup.confirmpassword.value) {
            alert(' Password and Confirm Password field does not match');
            document.signup.confirmpassword.focus();
            return false;
        }
        return true;
    }
    function showpass() {
          var x = document.getElementById("password");
          var y = document.getElementById("confirmpassword");
          if (x.type === "password" ) {
            x.type = "text";
            y.type = "text";
          } else {
            x.type = "password";
            y.type = "password";
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
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h2 align="center">Create Account</h2>
                                    <hr />
                                    <!-- <h3 class="text-center font-weight-light my-4">Create Account</h3></div> -->
                                    <div class="card-body">
                                        <form method="post" name="signup" onsubmit="return checkpass();">

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="fname" name="fname" type="text"
                                                            placeholder="Enter your first name" required />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="lname" name="lname" type="text"
                                                            placeholder="Enter your last name" required />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" type="email"
                                                    placeholder="team@gmail.com" required />
                                                <label for="inputEmail">Email address</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="contact" name="contact" type="text"
                                                    placeholder="1234567890" required pattern="[0-9]{10}"
                                                    title="10 numeric characters only" maxlength="10" required />
                                                <label for="inputcontact">Contact Number</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            
                                                        <select name="department" class="form-control" id="department">
                                                            <option selected>Department</option>
                                                            <option>Computer Science And Engineering</option>
                                                            <option>Computer Science (AL & ML)</option>
                                                            <option>Computer Science (DS)</option>
                                                            <option>Information Technology</option>
                                                            <option>Electronics And Communication Engineering</option>
                                                            <option>Electrical And Electronics Engineering</option>
                                                            <option>Electrical Engineering</option>
                                                            <option>Mechanical Engineering</option>
                                                        </select>
</div>

                                            <div class="form-floating mb-3">
                                            <!-- <label for="semester">Section</label> -->
                                                        <select name="section" class="form-control" id="section">
                                                            <option selected>Section</option>
                                                            <option>A 1</option>
                                                            <option>A 2</option>
                                                            <option>A 3</option>
                                                            <option>A 4</option>
                                                            <option>A 5</option>
                                                            <option>A 6</option>
                                                            <option>A 7</option>
                                                            <option>A 8</option>
                                                            <option>B 1</option>
                                                            <option>B 2</option>
                                                            <option>B 3</option>
                                                            <option>B 4</option>
                                                            <option>B 5</option>
                                                            <option>B 6</option>
                                                            <option>B 7</option>
                                                            <option>B 8</option>
                                                        </select>
</div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="urollno" name="urollno"
                                                            type="text" placeholder="1234567890" maxlength="13"
                                                            required />
                                                        <label for="inputcontact">University Roll No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="addno" name="addno" type="text"
                                                            placeholder="1234567890" maxlength="9" required />
                                                        <label for="inputcontact">Admission No.</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <!-- <label for="semester">Semester</label> -->
                                                        <select name="semester" class="form-control" id="semester">
                                                            <option selected>Semester</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <!-- <label for="year">Year</label> -->
                                                        <select name="year" class="form-control" id="year">
                                                            <option selected>Year</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="password" name="password"
                                                            type="password" placeholder="Create a password"
                                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                                                            required />
                                                        <label for="inputPassword">Password</label>
                                                        <input type="checkbox" onclick="showpass()"> Show Password(s)
                                                        
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="confirmpassword"
                                                            name="confirmpassword" type="password"
                                                            placeholder="Confirm password"
                                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                                                            required />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit"
                                                        class="btn btn-primary btn-block" name="submit">Create
                                                        Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                        <div class="small"><a href="index.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
        <?php include_once('includes/footer.php');?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>