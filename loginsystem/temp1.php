<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.container {
			margin: 100px 400px;
		}

		.no-box {
			padding-left: 30px;
			font-size: 60px;
		}

		.btn {
			background-color: rgb(179, 179, 179);
		}

		.btn:hover {
			color: white;
			background-color: green;
		}
	</style>
</head>

<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$j = count($cars);
// echo $j;
//  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
	<div class="container">
		<div class="no-box">
			<span class="no"><?php echo $cars[0] ?></span>
		</div>

		<button class="btn" onclick="prev()">
			prev
		</button>

		<button class="btn" onclick="next()">
			next
		</button>
	</div>

	<script>
		var no_box = document
			.querySelector('.no-box');
			
		var i = 1;

		function prev() {

			// Start position
			if (i == 1) {

				// Add disabled attribute on
				// prev button
				document.getElementsByClassName(
						'prev').disabled = true;

				// Remove disabled attribute
				// from next button
				document.getElementsByClassName(
						'next').disabled = false;
			} else {
				i--;
				return setNo();
			}
		}

		function next() {

			// End position
			if (i == 5) {

				// Add disabled attribute on
				// next button
				document.getElementsByClassName(
						'next').disabled = true;

				// Remove disabled attribute
				// from prev button
				document.getElementsByClassName(
						'prev').disabled = false;
			} else {
				i++;
				return setNo();
			}
		}

		function setNo() {

			// Change innerhtml
			return no_box.innerHTML = i;
		}
	</script>

</body>

</html>
