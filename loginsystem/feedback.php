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
    <title>Student Dashboard | JSSATEN-SIM </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script>
    if (document.cookie.indexOf("lg") != -1) {
        var i = document.cookie.indexOf("index");
        let currentIndexValue = document.cookie[i + 6];
        var l = document.cookie.indexOf("pgerfresh");
        let pageRefreshValue = document.cookie[l + 10] - '0';
        if (pageRefreshValue == 0) {
            document.cookie = 'pgerfresh=' + (++pageRefreshValue);
            location.reload();
        }
        let arraysize = document.cookie.charAt(document.cookie.indexOf("arraySize") + 10);
         if (currentIndexValue >= arraysize) {
             window.location.replace("thankyou.php");
         }
        // else
        // document.cookie="index="+(currentIndexValue++);

    }
    //document.cookie.charAt(document.cookie.indexOf("index")+6)-'0'
    </script>
</head>
<?php
                    if (!isset($_COOKIE["lg"])) {
                        setcookie("lg", "ro");
                        setcookie("pgerfresh" , 0);
                        
                        global $subjectArray;
                        $id1 = $_SESSION['id'];


                        $sql4 = "select section from users where id= '$id1'";
                        $result4= mysqli_query($con , $sql4);
                        $row4 = mysqli_fetch_assoc($result4);
                        $section = $row4['section'];
                        $delimiter = ' ';
                        $words = explode($delimiter, $section);
                        global $fsection;
                        $fsection = $words[0];

                        $sql = mysqli_query($con, "select subject from subjects where semester= (select semester from users where id = $id1) and section_= '$fsection'");
                        $subjectArray = array();
                        while ($result = mysqli_fetch_assoc($sql)) {
                            $subjectArray[] = $result['subject'];
                        }
                        setcookie('subjectArrayCookie', json_encode($subjectArray), time() + 3600);
                        $indexCookie = "index";
                        $indexValue = 0;
                        setcookie($indexCookie, $indexValue, time() + 3600);
                        $arraySizeCookie = "arraySize";
                        $arraySizeValue = sizeof($subjectArray);
                        // print($indexValue);
                        setcookie($arraySizeCookie,  $arraySizeValue, time() + 3600);
                        // setcookie('tempIndex', 0 , time() + 3600 );
                    }
                    // if($_COOKIE['index'] == $_COOKIE['arraySize'])
                    // {
                    //     // 301 Moved Permanently
                    //     // header("Location: http://google.com/", true, 301);
                    //     // exit();

                    // }


                    ?>

<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">
            <main>




                <div class="container">
                    <?php
// extract($_POST);
// if(isset($sub))

$data = json_decode($_COOKIE['subjectArrayCookie'], true);
$index = $_COOKIE['index'];
global $sub;
 $sub = $data[$index];
$sub1  = $sub;
$_POST['subject'] = $sub1;
// echo $sub;
    
                        $sql5 = "select subjectcode from subjects where subject= '$sub'";
                        $result5= mysqli_query($con , $sql5);
                        $row5 = mysqli_fetch_assoc($result5);
                        
                        $subjectCode = $row5['subjectcode'];
                        global $subjectCode;
                        $subCode1  = $subjectCode;
                        $_POST['subjectcode'] = $subCode1;

echo "<strong>Subject Name : $sub ($subjectCode)</strong><br>";
//Count total Votes
$r=mysqli_query($con,"select * from courseoutcomes where subject='$sub'");
$c=mysqli_num_rows($r);	
// $GLOBALS['sub'] = $sub;
// echo "<h4>Total Student Attempts : ".$c."</h4>";
// $result = mysqli_query($con, $r);
$row = mysqli_fetch_assoc($r);
        $cols = mysqli_num_fields($r) - 1;
        
        $GLOBALS['cols'] ;
        // $GLOBALS['subject'];

        for ($t = 1; $t <= $cols; $t++) {
          $str = "CO" . $t;
          if (isset($row[$str]))
            echo "<b>" . $str . " : </b> " . $row[$str] . '<br>';
          else {
            global $co_numbers;
            $co_numbers = $t;
            break;
          }
        }

?>

                </div>

                <form method="post" style="border: 0;">
                    <div class="p-4 d-flex bd-highlight">
                        <div class="p-4 w-50 flex-fill bd-highlight">
                            <h2>Course Outcome Feedback<sup>*</sup></h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm" style="border: 1px solid black;">
                                        1 - Low
                                    </div>
                                    <div class="col-sm" style="border: 1px solid black;">
                                        2 - Medium
                                    </div>
                                    <div class="col-sm" style="border: 1px solid black;">
                                        3 - High
                                    </div>
                                </div>
                            </div>
                            <table>
                                <tr class="bg-light">
                                    <td>
                                        <span>CO1</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co1" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co1" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co1" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td>
                                        <span>CO2</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co2" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co2" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co2" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td>
                                        <span>CO3</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co3" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co3" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co3" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td>
                                        <span>CO4</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co4" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co4" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co4" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td>
                                        <span>CO5</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co5" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co5" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co5" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-light co6">
                                    <td>
                                        <span>CO6</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co6" id="inlineRadio1"
                                                value="1" />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co6" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="co6" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                 $cols =0;
                                 if(isset($GLOBALS['cols']))
                                 $cols = $GLOBALS['cols'];
                                 if($cols != 6)
                                 {
                                
                                echo "<script>document.getElementsByClassName('co6')[0].style.display = 'none';</script>";
                                 }
                                ?>
                            </table>
                        </div>

                        <div class="p-4 flex-fill bd-highlight">
                            <span>
                                <h2>Subject Feedback <sup>*</sup></h2>
                            </span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm" style="border: 1px solid black;">
                                        1 - Poor
                                    </div>
                                    <div class="col-sm" style="border: 1px solid black;">
                                        2 - Average
                                    </div>
                                    <div class="col-sm" style="border: 1px solid black;">
                                        3 - Good
                                    </div>
                                    <div class="col-sm" style="border: 1px solid black;">
                                        4 - Excellent
                                    </div>
                                </div>
                            </div>
                            <table>
                                <tr class="bg-light">
                                    <td><span>Adequate Assignments/Quiz/Tutorial Conducted</span></td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb1" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb1" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb1" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb1" id="inlineRadio2"
                                                value="4" />
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                    </td>

                                </tr>
                                <tr class="bg-light">
                                    <td><span>Class Room Discipline</span> </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb2" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb2" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb2" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb2" id="inlineRadio2"
                                                value="4" />
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-light">
                                    <td> <span>Organization of Lecture & Clarity of delivery</span></td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb3" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb3" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb3" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb3" id="inlineRadio2"
                                                value="4" />
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                    </td>

                                </tr>


                                <tr class="bg-light">

                                    <td>
                                        <span>Course Coverage</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb4" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb4" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb4" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb4" id="inlineRadio2"
                                                value="4" />
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-light">
                                    <td>
                                        <span>Course Delivery</span>
                                    </td>
                                    <td>
                                        <div class="form-check my-2  pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb5" id="inlineRadio1"
                                                value="1" required />
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb5" id="inlineRadio2"
                                                value="2" />
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb5" id="inlineRadio2"
                                                value="3" />
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check  my-2 pl-5 form-check-inline">
                                            <input class="form-check-input" type="radio" name="sb5" id="inlineRadio2"
                                                value="4" />
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="container text-center p-2"><button type="submit" name='insert'
                            onclick="incrementCookie()" class="btn btn-outline-secondary">Next</button></div>
                </form>

                </script>

                <?php
                // function php_func()
                // {
  if (isset($_POST['insert']))
   {
                
                
    $co1 = $_POST['co1'];
    $co2 = $_POST['co2'];
    $co3 = $_POST['co3'];
    $co4 = $_POST['co4'];
    $co5 = $_POST['co5'];
    if($GLOBALS['cols'] == 6)
    $co6 = $_POST['co6'];
    else
    $co6 = 0;
    // echo "aayush";
    $sb1 = $_POST['sb1'];
    $sb2 = $_POST['sb2'];
    $sb3 = $_POST['sb3'];
    $sb4 = $_POST['sb4'];
    $sb5 = $_POST['sb5'];
    // $responeid=$_SESSION['id'];
    $id1 = $_SESSION['id'];
    $sub = $_POST['subject'];
    $subCode = $_POST['subjectcode'];
    $sub2 = $data[$index - 1];
    $uname = mysqli_query($con,"select email from users where id = $id1");
                $result1 = mysqli_fetch_assoc($uname);
                $usersemail = $result1['email'];
                // echo $sub;
                // echo $subCode;
                // echo $_COOKIE['index'];
                $sql1 = "select facultyemail from subjectalloted where suballoted = '$subCode' and section = (select section from users where id= '$id1')";
                $result2= mysqli_query($con , $sql1);
                $row1 = mysqli_fetch_assoc($result2);
                $facultyemail = $row1['facultyemail'];
    // $sql2 = "INSERT INTO `respone` (`subject` , `usersemail`,`facultyemail`) values ('$sub', '$usersemail', '$facultyemail')";
    // mysqli_query($con, $sql2);
    // mysqli_query($con,"UPDATE respone SET co1='$co1',co2='$co2',co3='$co3',co4='$co4',co5='$co5',co6='$co6',sb1='$sb1',sb2='$sb2',sb3='$sb3',sb4='$sb4',sb5='$sb5' where id= (select max(id) from respone)");
    
    $sql = "INSERT INTO `respone` (`subjectcode`,`subject`,`usersemail`,`facultyemail`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`, `sb1`, `sb2`, `sb3`, `sb4`, `sb5`) VALUES ('$subCode','$sub2', '$usersemail', '$facultyemail','$co1', '$co2', '$co3', '$co4', '$co5', '$co6', '$sb1', '$sb2', '$sb3', '$sb4', '$sb5')";
    mysqli_query($con, $sql);

    $count = $_COOKIE['arraySize'];
    if($index==($count))
    {
        $sql3 = "UPDATE users SET feedback=1 WHERE email='$usersemail'";
    mysqli_query($con, $sql3);

    }
  }
//   echo "done finally";
  // echo "<script>
  // incrementCookie();
  // </scri>";
// }
// solution 
  ?>

                <script>
                function radiocheck() {
                    const radcheck = document.getElementsByClassName('form-check-input');
                    let norad = 0;
                    console.log(radcheck.length);
                    for (i = 0; i < radcheck.length; i++) {
                        console.log(radcheck[i].checked)
                        if (radcheck[i].checked === true) {
                            norad++;
                        }
                    }
                    console.log(norad)
                    return norad;
                }
                async function incrementCookie() {
                    console.log(`well that's it`)
                    const norad = await radiocheck()
                    console.log('okay' + norad)
                    if (norad == 10) {
                        console.log("next time")
                        var i = document.cookie.indexOf('index');
                        let currentIndexValue = document.cookie[i + 6] - '0';
                        document.cookie = 'index=' + (++currentIndexValue);
                    }

                }
                // incrementCookie(); 
                </script>


            </main>
            <?php include_once('includes/footer.php'); ?>
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