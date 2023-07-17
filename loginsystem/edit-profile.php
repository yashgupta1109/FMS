<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {
    //Code for Updation 
    if (isset($_POST['update'])) {
        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        $contact = $_POST['contact'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $userid = $_SESSION['id'];
        $msg = mysqli_query($con, "update users set contactno='$contact' where id='$userid'");
        $msg = mysqli_query($con, "update users set year='$year' where id='$userid'");
        $msg = mysqli_query($con, "update users set semester='$semester' where id='$userid'");

        if ($msg) {
            echo "<script>alert('Profile updated successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
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
        <title>Edit Profile | JSSATEN-SIM</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <?php
                        $userid = $_SESSION['id'];
                        $query = mysqli_query($con, "select * from users where id='$userid'");
                        while ($result = mysqli_fetch_array($query)) { ?>
                            <h1 class="mt-4">
                                <?php echo $result['fname']; ?>'s Profile
                            </h1>
                            <hr>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="welcome.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="profile.php">Student's Profile</a></li>
                                <li class="breadcrumb-item active">Edit Student's Profile</li>
                            </ol>
                            <div class="card mb-4">
                                <form method="post">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>First Name</th>
                                                <td colspan="3">
                                                    <?php echo $result['fname']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Last Name</th>
                                                <td colspan="3">
                                                    <?php echo $result['lname']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td colspan="3">
                                                    <?php echo $result['email']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Contact No.</th>
                                                <td colspan="3"><input class="form-control" id="contact" name="contact"
                                                        type="text" value="<?php echo $result['contactno']; ?>"
                                                        pattern="[0-9]{10}" title="10 numeric characters only" maxlength="10"
                                                        required /></td>
                                            </tr>
                                            <tr>
                                                <!-- <tr>
                                                <th>Semester.</th>
                                                <td colspan="3"><input class="form-control" id="semester" name="semester"
                                                        type="text" value="<?php echo $result['semester']; ?>" required /></td>
                                            </tr>
                                            <tr> -->

                                                <th>Semester</th>
                                                <td colspan="3">
                                                    <select name="semester" class="form-control" id="semester" type="text"
                                                        value="<?php echo $result['semester']; ?>">

                                                        <option selected>
                                                            <?php echo $result['semester']; ?>
                                                        </option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                    </select>
                                                </td>
                                            </tr>


                                            <tr>
                                            <tr>
                                                <th>Batch</th>
                                                <td colspan="3"><input class="form-control" id="year" name="year"
                                                        title="batch e.g. 2022-2023" type="text"
                                                        value="<?php echo $result['year']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <!-- <th>Year</th>
                                                <td colspan="3">

                                                    <select name="year" class="form-control" id="year" type="text"
                                                        value="<?php echo $result['year']; ?>">
                                                        <option selected>
                                                            <?php echo $result['year']; ?>
                                                        </option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </td>
                                            </tr> -->



                                            <tr>
                                                <th>Reg. Date</th>
                                                <td colspan="3">
                                                    <?php echo $result['posting_date']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" style="text-align:center ;"><button type="submit"
                                                        class="btn btn-primary btn-block" name="update">Update</button></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>

                    </div>
                </main>
                <?php include('includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

    </html>
<?php } ?>