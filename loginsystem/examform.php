<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Exam Form | JSSATEN-SIM</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
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
                    <h1 class="mt-4">Exam Form</h1>
                    <hr />
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Exam Form</li>
                    </ol>

                    <?php 
$userid=$_SESSION['id'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
<?php $sem = $result['semester']; ?>
                    <div class="p-4 container">
                    <form method="post" style="border: 0;">
                        <table class="table table-hover">
                            <tr>

                                <th> Select Subjects</th>
                                <td>
                                    <select name="subject" class="form-control">
                                        <option selected>Choose...</option>
                                        <?php
                                    // $id1 = $_SESSION['id'];
                                    global $facultyid;
	$sql=mysqli_query($con,"select * from subjects WHERE semester = '$sem'");
	while($r=mysqli_fetch_array($sql))
	{
        
    echo "<option value='".$r['subjectcode']." ".$r['subject']."'>".$r['subjectcode']." ".$r['subject']."</option>";
	}
		 ?>
                                    </select>
                                </td>
                                <td><input name="submit" type="submit" value="Submit" class="btn btn-success" /></td>
                            </tr>
                        </table>
                    </form>
                </div>


                    <?php } ?>

                    <?php
  if (isset($_POST['submit']))
  { 
    
    
    
       $subject = $_POST['subject'];
       $delimiter = ' ';
       $words = explode($delimiter, $subject);
       global $subjectCode;
       global $subjectName;
        $subjectCode = $words[0];
        $subjectName = $words[1]." ".$words[2];
       $id1 = $_SESSION['id'];
       $uname = mysqli_query($con,"select email from users where id = $id1");
       $result1 = mysqli_fetch_assoc($uname);
       $usersemail = $result1['email'];
       $sql1 = "select facultyemail from subjectalloted where suballoted = '$subjectCode' and section = (select section from users where id= '$id1')";
       $result2= mysqli_query($con , $sql1);
       $row1 = mysqli_fetch_assoc($result2);
       $facultyemail = $row1['facultyemail'];
       $sql = "INSERT INTO `selectedSubjects` (`usersemail`,`facultyemail`,`subjectcode`,`subjectname`) VALUES ('$usersemail', '$facultyemail','$subjectCode','$subjectName')";
       mysqli_query($con, $sql);
  }
   ?>


                </div>

            </main>
            <?php include_once('includes/footer.php');?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</body>

</html>
<?php } ?>