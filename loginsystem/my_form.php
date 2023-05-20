<?php session_start();
include_once('includes/config.php');
// if (strlen($_SESSION['id']==0)) {
//   header('location:logout.php');
//   } 





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <title>Feedback Form</title>
</head>

<body>
  <div class="container">
    <form  method="post">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <?php $sql = "select * from courseoutcomes where subject = 'maths'";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_assoc($result);
        $cols = mysqli_num_fields($result) - 1;
        for ($t = 1; $t <= $cols; $t++) {
          $str = "co" . $t;
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
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <!--course outcome feedback-->
        <h2>Course Outcome Feedback<sup>*</sup></h2>
        <table>
          <tr class="bg-light">
            <td>
              <span>CO1</span>
            </td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co1" id="inlineRadio1" value="1"  />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co1" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co1" id="inlineRadio2" value="3" />
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
                <input class="form-check-input" type="radio" name="co2" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co2" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co2" id="inlineRadio2" value="3" />
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
                <input class="form-check-input" type="radio" name="co3" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co3" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co3" id="inlineRadio2" value="3" />
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
                <input class="form-check-input" type="radio" name="co4" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co4" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co4" id="inlineRadio2" value="3" />
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
                <input class="form-check-input" type="radio" name="co5" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co5" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co5" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
            </td>
          </tr>
          <tr class="bg-light">
            <td>
              <span>CO6</span>
            </td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co6" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co6" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="co6" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="my-3 p-3 bg-white rounded shadow-lg">
        <!-- subject feedback starts -->
        <h2>Subject Feedback <sup>*</sup></h2>
        <table>
          <tr class="bg-light">

            <td> <span>Adequate Assignments/Quiz/Tutorial Conducted</span> </td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb1" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb1" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb1" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb1" id="inlineRadio2" value="4" />
                <label class="form-check-label" for="inlineRadio2">4</label>
            </td>

          </tr>
          <tr class="bg-light">



            <td><span>Class Room Discipline</span> </td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb2" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb2" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb2" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb2" id="inlineRadio2" value="4" />
                <label class="form-check-label" for="inlineRadio2">4</label>
              </div>
            </td>
          </tr>
          <br>
          <tr class="bg-light">
            <td> <span>Organization of Lecture & Clarity of delivery</span></td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb3" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb3" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb3" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb3" id="inlineRadio2" value="4" />
                <label class="form-check-label" for="inlineRadio2">4</label>
              </div>
            </td>

          </tr>

          <br>
          <tr class="bg-light">

            <td>
              <span>Course Coverage</span>
            </td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb4" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb4" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb4" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb4" id="inlineRadio2" value="4" />
                <label class="form-check-label" for="inlineRadio2">4</label>
              </div>
            </td>
          </tr>
          <br>
          <tr class="bg-light">
            <td>
              <span>Course Delivery</span>
            </td>
            <td>
              <div class="form-check my-2  pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb5" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb5" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb5" id="inlineRadio2" value="3" />
                <label class="form-check-label" for="inlineRadio2">3</label>
              </div>
              <div class="form-check  my-2 pl-5 form-check-inline">
                <input class="form-check-input" type="radio" name="sb5" id="inlineRadio2" value="4" />
                <label class="form-check-label" for="inlineRadio2">4</label>
              </div>
            </td>
          </tr>
        </table>

      </div>
      <button type="submit" name='insert'  class="btn btn-outline-secondary">Next</button>
    </form>
  </div>
  <?php
  if (isset($_POST['insert'])) {
    $co1 = $_POST['co1'];
    $co2 = $_POST['co2'];
    $co3 = $_POST['co3'];
    $co4 = $_POST['co4'];
    $co5 = $_POST['co5'];
    $co6 = $_POST['co6'];
    $sb1 = $_POST['sb1'];
    $sb2 = $_POST['sb2'];
    $sb3 = $_POST['sb3'];
    $sb4 = $_POST['sb4'];
    $sb5 = $_POST['sb5'];
    $sql = "INSERT INTO `student_response` (`student`, `uni_roll_num`, `.co1`, `co2`, `co3`, `co4`, `co5`, `co6`, `sb1`, `sb2`, `sb3`, `sb4`, `sb5`) VALUES ('aayush', '2002', '$co1', '$co2', '$co3', '$co4', '$co5', '$co6', '$sb1', '$sb2', '$sb3', '$sb4', '$sb5')";
    mysqli_query($con, $sql);
  }
  ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>