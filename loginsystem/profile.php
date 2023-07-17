<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile | JSSATEN-SIM</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
        </script>
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
                                <li class="breadcrumb-item active">Student's Profile</li>
                            </ol>

                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-fill bd-highlight">

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <a href="edit-profile.php">Edit</a>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>First Name</th>
                                                    <td>
                                                        <?php echo $result['fname']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <td>
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
                                                    <th>Year</th>
                                                    <td colspan="3">
                                                        <?php echo $result['year']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Semester</th>
                                                    <td colspan="3">
                                                        <?php echo $result['semester']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Department</th>
                                                    <td colspan="3">
                                                        <?php echo $result['department']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Section</th>
                                                    <td colspan="3">
                                                        <?php echo $result['section']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>University Roll No.</th>
                                                    <td colspan="3">
                                                        <?php echo $result['urollno']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Admission No.</th>
                                                    <td colspan="3">
                                                        <?php echo $result['addno']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Contact No.</th>
                                                    <td colspan="3">
                                                        <?php echo $result['contactno']; ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Reg. Date</th>
                                                    <td colspan="3">
                                                        <?php echo $result['posting_date']; ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight  d-flex justify-content-center">
                                    <div class="d-flex flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">
                                            <!-- find users' image if image not found then show dummy image -->
                                            <!-- check users profile image -->
                                            <?php
                                            $q = mysqli_query($con, "select img from users where id='" . $_SESSION['id'] . "'");
                                            $row = mysqli_fetch_assoc($q);
                                            if (!isset($row['img']))
                                            // if($row['img']=='NULL')
                                            {
                                                ?>
                                                <a href="#"><img style="border-radius:50px" src="assets/img/stuimg.webp" width="350"
                                                        height="350" alt="not found" /></a>
                                            <?php
                                            } else {
                                                ?>
                                                <a href="#"><img style="border-radius:50px" src="uploads/<?php echo $row['img']; ?>"
                                                        width="350" height="350" alt="not found" /></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <b class="mx-2">Select image to upload:</b> <br>
                                                <input type="file" name="fileToUpload" id="fileToUpload" style="padding:10px;">
                                                <br>
                                                <div class="mx-2"><input type="submit" value="Upload Image" name="submit"></div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </main>
                <?php include_once('includes/footer.php'); ?>
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