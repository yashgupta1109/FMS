<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {
    // for deleting user
    if (isset($_GET['id'])) {
        $adminid = $_GET['id'];
        $msg = mysqli_query($con, "delete from users where id='$adminid'");
        if ($msg) {
            echo "<script>alert('Data deleted');</script>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Student | JSSATEN-SIM</title>
        <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
        </script>
        <!-- <style>
            .print-button {
                margin-bottom: 10px;
            }

            @media print {
                body * {
                    display: inline;
                }

                .results {
                    display: block;
                }
            }
        </style> -->

    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4" id="tblCustomers">
                        <h1 class="mt-4">Manage Student</h1>
                        <hr>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Students</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registered User Details
                            </div>
                            <div class="card-body">
                                <!-- <table id="datatablesSimple" class="display" style="width:100%"> -->
                                <table id="datatablesSimple" class="results" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>First Name</th>
                                            <th> Last Name</th>
                                            <th> Email Id</th>
                                            <th>Year</th>
                                            <th>Semester</th>
                                            <th>Section</th>
                                            <th>Contact no.</th>
                                            <th>University Roll No.</th>
                                            <th>Admission No.</th>
                                            <th>Reg. Date</th>
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>First Name</th>
                                            <th> Last Name</th>
                                            <th> Email Id</th>
                                            <th>Year</th>
                                            <th>Semester</th>
                                            <th>Section</th>
                                            <th>Contact no.</th>
                                            <th>University Roll No.</th>
                                            <th>Admission No.</th>
                                            <th>Reg. Date</th>
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $ret = mysqli_query($con, "select * from users");
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($ret)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cnt; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['lname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['year']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['semester']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['section']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['contactno']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['urollno']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['addno']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['posting_date']; ?>
                                                </td>
                                                <td>
                                                    <?php if ($row['feedback'] == 1) {
                                                        echo "Yes";
                                                    } else {
                                                        echo "No";
                                                    }
                                                    ?>
                                                </td>
                                                <td>

                                                    <a href="user-profile.php?uid=<?php echo $row['id']; ?>">
                                                        <i class="fas fa-edit"></i></a>
                                                    <a href="manage-users.php?id=<?php echo $row['id']; ?>"
                                                        onClick="return confirm('Do you really want to delete');"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <?php $cnt = $cnt + 1;
                                        } ?>

                                    </tbody>
                                </table>



                                <button id="btnExport" onclick="window.print()" type="button"
                                    class="btn btn-outline-primary">Download</button>
                                <!-- <button class="print-button" onclick="window.print()">Print</button> -->
                                <script type="text/javascript"
                                    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
                                <script type="text/javascript"
                                    src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js">
                                    </script>
                                </script>
                                <script type="text/javascript">
                                    function Export() {
                                        html2canvas(document.getElementById('tblCustomers'), {
                                            onrendered: function (canvas) {
                                                var data = canvas.toDataURL();
                                                var docDefinition = {
                                                    content: [{
                                                        image: data,
                                                        width: 500
                                                    }]
                                                };
                                                pdfMake.createPdf(docDefinition).download("Student Registered.pdf");
                                            }
                                        });
                                    }
                                    
                                </script>
                                <!-- <script>

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
                XLSX.writeFile(wb, fn || ('Student Database.' + (type || 'xlsx')));
        }

    </script> -->
                            </div>
                        </div>
                    </div>
                </main>
                <?php include('../includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

    </html>
<?php } ?>