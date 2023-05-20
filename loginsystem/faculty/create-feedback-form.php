<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['facultyid']==0)) {
  header('location:logout.php');
  } else{

      if(isset($_POST['create']))
      {
        $section=$_POST['section'];
        $semester=$_POST['semester'];
        $subject=$_POST['subject'];
        $co=$_POST['co'];
        echo "<script>alert('you have clicked');</script>";
    $sql=mysqli_query($con,"select * from createfeedback");
    $row=mysqli_num_rows($sql);
    
    // if($row==true)
    // {
    // echo "<h2 style='color:red'>You already created feedback to this Subject</h2>";
    // }

    // else{
        $msg=mysqli_query($con,"insert into createfeedback(section,semester,subject,co) values('$section','$semester','$subject','$co')");

    if($msg)
    {
        echo "<script>alert('Feedback created successfully');</script>";
        echo "<script type='text/javascript'> document.location = 'create-feedback-form.php'; </script>";
    }
    //}
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
    <title>Create Feedback Form | JSSATEN-SIM </title>
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
                    <h1 class="mt-4">Create Feedback Form</h1>
                    <hr>
                    <div class="container">
                        <?php 
$facultyid=$_SESSION['facultyid'];
$query=mysqli_query($con,"select * from faculty where id='$facultyid'");
while($result=mysqli_fetch_array($query))
{?>
                        <div class="container" style="font-size:24px">Welcome
                            <span style="font-size:22px;">
                                <?php echo $result['fname']." ".$result['lname'];?>
                            </span>
                        </div>
                        <div class="container" style="font-size:20px">Your Subjects are :
                            <span style="font-size:20px;">
                                <?php echo $result['subjectalloted'];?>
                            </span>
                        </div>
                        <?php } ?>
                        <div class="container p-4 px-5">
                            <form method="post" class="p-4">
                                <div class="form-group">
                                    <label for="section">Select Section :</label>
                                    <select name="section "class="form-control" id="section">
                                    <option selected>Choose...</option>         
                                    <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Select Semester :</label>
                                    <select name="semester "class="form-control" id="semester">
                                    <option selected>Choose...</option>         
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
                                <div class="form-group">
                                    <label for="subject">Select Subject :</label>
                                    <select name="subject "class="form-control" id="subject">
                                    <option selected>Choose...</option>  
                                    <?php
$sql=mysqli_query($con,"select * from subjects");
	while($row=mysqli_fetch_array($sql))
	{
	echo "<option value='".$row['subject']."'>".$row['subject']."</option>";
	}
		 ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="co">Course Outcome :</label>
                                    <textarea name="co" class="form-control" id="co" rows="3"></textarea>
                                </div>
                                <div class="container center mt-4">
                                    <button type="submit" class="btn btn-outline-primary" name="create">Create Feedback Form</button>
                                </div>
                            </form>
                        </div>


                        
                    </div>
                </div>
            </main>
            <?php include_once('../includes/footer.php'); ?>
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
<?php } ?>