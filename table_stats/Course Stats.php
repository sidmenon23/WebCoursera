<?php
include("../config.php");
session_start();

$sql = "SELECT * FROM user WHERE admin = 0";

$result = mysqli_query($db, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['delete'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	// $sql_del = " DELETE FROM user WHERE emailID = '$email' ";

	$sql_del ="DELETE FROM `user`
            WHERE `user`.`emailID` = '$email'";

	$result1 = mysqli_query($db, $sql_del);
	header("location: Course Stats.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Course Statistics</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/page.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-html5-1.5.4/r-2.2.2/datatables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#page').dataTable({
				responsive: "true",
			});
		});
	</script>


</head>

<body>

	<nav class=" navbar-inverse">
		<div class="nav-bar container-fluid ">
			<ul class="nav navbar-nav ">
				<li><a class="nav-bar-header" href="../Dashboard.php" style="font-size: 25px;">WebCoursera</a></li>
				<li class="activate nav-bar-header"><a class="nav-bar-header" href="../About Us.html">About Us</a></li>
				<li class="nav-bar-header"><a class="nav-bar-header" href="../Contact.html">Contact Us</a></li>
				<li class="nav-bar-header"><a class="nav-bar-header" href="../All Courses.php">Courses</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-bar-header"><a class="nav-bar-header" href="../Login.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
			</ul>
		</div>
	</nav>


	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
					<div style="margin-left:37vw; margin-top:23px; margin-bottom:-33px;">
						<form action="Course Stats.php" method="POST">
							<input type="email" name="email" placeholder="Enter the Email ID" style="background: #fff; color:#000; border-color:#fff; ">
							<input type="submit" name="delete" value="Delete User" style="margin-left:5px;border-color:#fff ;border-radius: 10px; background-color:#000117; color:#fff;">
						</form>
					</div>
					<table data-vertable="ver6" class="sortable" id="page">
						<thead>
							<tr class="row100 head">
								<th class="column100 column0">UID</th>
								<th class="column100 column1">User Name</th>
								<th class="column100 column2">Email ID</th>
								<th class="column100 column3">Contact No</th>
								<th class="column100 column4">HTML</th>
								<th class="column100 column4">CSS</th>
								<th class="column100 column4">Python</th>
								<th class="column100 column4">JavaScript</th>
								<th class="column100 column4">Java</th>
								<th class="column100 column5">AJAX</th>
								<!-- <th class="column100 column4">AJAX</th> -->
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							for ($x = 0; $x <= 30; $x++) {
								foreach ($rows as $row) {
							?>
									<tr class="row100">
										<td class="column100 column0"><?php echo $i; ?></td>
										<td class="column100 column1"><?php echo $row['fName'], " ", $row['lName']; ?></td>
										<td class="column100 column2"><?php echo $row['emailID']; ?></td>
										<td class="column100 column3"><?php echo $row['phoneNo']; ?></td>
										<td class="column100 column4"><?php
																		if ($row['html'] == 0) {
																			echo "Not Registered";
																		} else {
																			echo "Registered";
																		}
																		?></td>
										<td class="column100 column4"><?php
																		if ($row['css'] == 0) {
																			echo "Not Registered";
																		} else {
																			echo "Registered";
																		}
																		?></td>
										<td class="column100 column4"><?php
																		if ($row['python'] == 0) {
																			echo "Not Registered";
																		} else {
																			echo "Registered";
																		}
																		?></td>
										<td class="column100 column4"><?php
																		if ($row['js'] == 0) {
																			echo "Not Registered";
																		} else {
																			echo "Registered";
																		}
																		?></td>
										<td class="column100 column4"><?php
																		if ($row['java'] == 0) {
																			echo "Not Registered";
																		} else {
																			echo "Registered";
																		}
																		?></td>
										<td class="column100 column4"><?php
																		if ($row['ajax'] == 0) {
																			echo "Not Registered";
																		} else {
																			echo "Registered";
																		}
																		?></td>
									</tr>
							<?php
									$i++;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-basic fix">
		<footer>
			<div class="social">
				<a href="#"><i style="color: rgb(107, 253, 107);" class="fa fa-whatsapp fa-fw"></i></a>
				<a href="#"><i style="color: rgb(255, 134, 219);" class="fa fa-instagram fa-fw"></i></a>
				<a href="#"><i style="color: rgb(255, 0, 34);" class="fa fa-google-plus fa-fw"></i></a>
				<a href="#"><i style="color: rgb(110, 110, 255);" class="fa fa-facebook fa-fw"></i></a>
				<a href="#"><i style="color: rgb(251, 255, 0);" class="fa fa-snapchat-ghost fa-fw"></i></a>
			</div>

			<ul class="list-inline">
				<li style="color: black" class="list-inline-item"><a href="../Help.html">Help and Support</a></li>
				<li style="color: black" class="list-inline-item"><a href="../Terms.html">Terms and Conditions</a></li>
				<li style="color: black" class="list-inline-item"><a href="../Privacy Policy.html">Privacy Policy</a></li>
			</ul>
			<p class="copyright">WebCoursera © 2021</p>
		</footer>
	</div>
</body>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>

</html>