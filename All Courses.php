<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.border = "0px";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>

</head>

<body>


    <?php
    include("config.php");
    function add_user()
    {

        $id = $_SESSION['userID'];

        if ($_GET['click'] == 'css') {

            $courses = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';

            $sql = "INSERT INTO css (userID, progress) 
            VALUES ('$id', '$courses')";
            $result = mysqli_query($GLOBALS['db'], $sql);

            $sql = "UPDATE `user` SET `css` = '1' 
            WHERE `user`.`userID` = '$id'";
            $result = mysqli_query($GLOBALS['db'], $sql);
            $_SESSION['css'] = 1;
        }

        if ($_GET['click'] == 'html') {
            $courses = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';
            $sql = "INSERT INTO html (userID, progress) 
            VALUES ('$id', '$courses')";
            $result = mysqli_query($GLOBALS['db'], $sql);

            $sql = "UPDATE `user` SET `html` = '1' 
            WHERE `user`.`userID` = '$id'";
            $result = mysqli_query($GLOBALS['db'], $sql);
            $_SESSION['html'] = 1;
        }

        if ($_GET['click'] == 'ajax') {
            $courses = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';
            $sql = "INSERT INTO ajax (userID, progress) 
            VALUES ('$id', '$courses')";
            $result = mysqli_query($GLOBALS['db'], $sql);

            $sql = "UPDATE `user` SET `ajax` = '1' 
            WHERE `user`.`userID` = '$id'";
            $result = mysqli_query($GLOBALS['db'], $sql);
            $_SESSION['ajax'] = 1;
        }


        if ($_GET['click'] == 'python') {
            $courses = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';
            $sql = "INSERT INTO python (userID, progress) 
            VALUES ('$id', '$courses')";
            $result = mysqli_query($GLOBALS['db'], $sql);

            $sql = "UPDATE `user` SET `python` = '1' 
            WHERE `user`.`userID` = '$id'";
            $result = mysqli_query($GLOBALS['db'], $sql);
            $_SESSION['python'] = 1;
        }


        if ($_GET['click'] == 'java') {
            $courses = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';
            $sql = "INSERT INTO java (userID, progress) 
            VALUES ('$id', '$courses')";
            $result = mysqli_query($GLOBALS['db'], $sql);

            $sql = "UPDATE `user` SET `java` = '1' 
            WHERE `user`.`userID` = '$id'";
            $result = mysqli_query($GLOBALS['db'], $sql);
            $_SESSION['java'] = 1;
        }


        if ($_GET['click'] == 'js') {
            $courses = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';
            $sql = "INSERT INTO js (userID, progress) 
            VALUES ('$id', '$courses')";
            $result = mysqli_query($GLOBALS['db'], $sql);

            $sql = "UPDATE `user` SET `js` = '1' 
            WHERE `user`.`userID` = '$id'";
            $result = mysqli_query($GLOBALS['db'], $sql);
            $_SESSION['js'] = 1;
        }
    }
    if (isset($_GET['click'])) {
        add_user();
    }


    ?>


    <nav class="navbar-inverse">
        <div class="nav-bar container-fluid " style="height: 54px;">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="Dashboard.php" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.php">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <ul style="margin-top: 8px; margin-right: 10px;" class="nav navbar-nav navbar-right">
                        <form class="form-inline my-2 my-lg-0" style="margin-top:2px;">
                            <input style="color: black; border-radius: 10px;" class="form-control mr-sm-2" type="search" placeholder="Search Course" aria-label="Search" size="30" onkeyup="showResult(this.value)">
                            <div id="livesearch" style="background-color: white;color: black; text-decoration: none;"></div>

                        </form>
                    </ul>

                </li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

            </ul>
        </div>
    </nav>


    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnails" style="width: 350px;">
                    <div class="notify">
                        <i class="fas fa-certificate fa-5x" style="color: black; margin: auto; width: 100%; padding-top: 10px;">
                        </i>
                    </div>
                    <div class="notify_text">
                        NEW
                    </div>
                    <img src="courses_logo/html.png" style="width: 350px; height: 250px; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="caption">
                        <h3 style="color: white; text-align: center;  background-color: black; padding: 10px; margin-top: 0px;">HTML 5</h3>


                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">Level: Beginner</li>
                            <li class="list-group-item">Instructor: Mosh</li>
                            <li class="list-group-item">Duration: 1:09:34</li>
                        </ul> -->

                        <div class="course-details">
                            <p style=" padding-top:10px;">Level: Beginner</p>
                            <p>Instructor: Mosh</p>
                            <p>Rating:
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p>
                                No. of Registered Students: <?php 
                                $sql = "SELECT COUNT(*) FROM html";
                                $result = mysqli_query($GLOBALS['db'], $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                echo $row["COUNT(*)"];

                                 ?>
                            </p>

                        </div>
                        <p style="display: flex;justify-content: center; padding-bottom: 20px;padding-top:5px;">
                            <a href="All Courses.php?click=html" class="btn btn-primary " role="button " <?php if ($_SESSION['html'] == 1) { ?>style="margin-right: 20px;display:none" <?php } ?>>Enroll</a> <a href="Course HTML.php" class="btn btn-default " role="button " style="margin-left: 10px;">View More</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=" col-sm-6 col-md-4">
                <div class="thumbnails" style="width: 35rem;">
                    <img src="courses_logo/css.png" style="width: 35rem; height: 25rem;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="caption">
                        <h3 style="color: white; text-align: center;  background-color: black; padding: 10px; margin-top: 0px;">CSS</h3>


                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">Level: Beginner</li>
                            <li class="list-group-item">Instructor: Mosh</li>
                            <li class="list-group-item">Duration: 1:09:34</li>
                        </ul> -->

                        <div class="course-details">
                            <p style=" padding-top:10px ">Level: Intermediate</p>
                            <p>Instructor: Michael</p>
                            <p>Rating:
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p>
                                No. of Registered Students: <?php 
                                $sql = "SELECT COUNT(*) FROM css";
                                $result = mysqli_query($GLOBALS['db'], $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                echo $row["COUNT(*)"];

                                 ?>
                            </p>
                        </div>
                        <p style="display: flex;justify-content: center; padding-bottom: 20px; padding-top:5px;">
                            <a href="All Courses.php?click=css" class="btn btn-primary " role="button " <?php if ($_SESSION['css'] == 1) { ?>style="margin-right: 20px;display:none" <?php } ?>>Enroll</a> <a href="Course CSS.php" class="btn btn-default " role="button " style="margin-left: 10px;">View More</a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4">
                <div class="thumbnails" style="width: 35rem;">
                    <div class="notify">
                        <i class="fas fa-certificate fa-5x" style="color: black; margin: auto; width: 100%; padding-top: 10px;">
                        </i>
                    </div>
                    <div class="notify_text">
                        NEW
                    </div>
                    <img src="courses_logo/javascript.png" style="width: 35rem; height: 25rem;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="caption">
                        <h3 style="color: white; text-align: center;  background-color: black; padding: 10px; margin-top: 0px;">Javascript</h3>


                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">Level: Beginner</li>
                            <li class="list-group-item">Instructor: Mosh</li>
                            <li class="list-group-item">Duration: 1:09:34</li>
                        </ul> -->

                        <div class="course-details">
                            <p style=" padding-top:10px ">Level: Beginner</p>
                            <p>Instructor: Sarah</p>
                            <p>Rating:
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </p>
<p>
                                No. of Registered Students: <?php 
                                $sql = "SELECT COUNT(*) FROM js";
                                $result = mysqli_query($GLOBALS['db'], $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                echo $row["COUNT(*)"];

                                 ?>
                            </p>
                        </div>
                        <p style="display: flex;justify-content: center; padding-bottom: 20px;padding-top:5px;">
                            <a href="All Courses.php?click=js" class="btn btn-primary " role="button " <?php if ($_SESSION['js'] == 1) { ?>style="margin-right: 20px;display:none" <?php } ?>>Enroll</a> <a href="Course JS.php" class="btn btn-default " role="button " style="margin-left: 10px;">View More</a>
                        </p>
                    </div>
                </div>
            </div>



            <div class="col-sm-6 col-md-4">
                <div class="thumbnails" style="width: 35rem;">
                    <img src="courses_logo/python.png" style="width: 35rem; height: 25rem;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="caption">
                        <h3 style="color: white; text-align: center;  background-color: black; padding: 10px; margin-top: 0px;">Python</h3>


                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">Level: Beginner</li>
                            <li class="list-group-item">Instructor: Mosh</li>
                            <li class="list-group-item">Duration: 1:09:34</li>
                        </ul> -->

                        <div class="course-details">
                            <p style=" padding-top:10px ">Level: Beginner</p>
                            <p>Instructor: Surya</p>
                            <p>Rating:
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star  checked"></span>
                                <span class="fa fa-star"></span>
                            </p>
<p>
                                No. of Registered Students: <?php 
                                $sql = "SELECT COUNT(*) FROM python";
                                $result = mysqli_query($GLOBALS['db'], $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                echo $row["COUNT(*)"];

                                 ?>
                            </p>
                        </div>
                        <p style="display: flex;justify-content: center; padding-bottom: 20px;padding-top:5px;">
                            <a href="All Courses.php?click=python" class="btn btn-primary " role="button " <?php if ($_SESSION['python'] == 1) { ?>style="margin-right: 20px;display:none" <?php } ?>>Enroll</a> <a href="Course Python.php" class="btn btn-default " role="button " style="margin-left: 10px;">View More</a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4">
                <div class="thumbnails" style="width: 35rem;">
                    <img src="courses_logo/ajax.png" style="width: 35rem; height: 25rem;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="caption">
                        <h3 style="color: white; text-align: center;  background-color: black; padding: 10px; margin-top: 0px;">AJAX</h3>


                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">Level: Beginner</li>
                            <li class="list-group-item">Instructor: Mosh</li>
                            <li class="list-group-item">Duration: 1:09:34</li>
                        </ul> -->

                        <div class="course-details">
                            <p style=" padding-top:10px ">Level: Hard</p>
                            <p>Instructor: Christopher</p>
                            <p>Rating:
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p>
                                No. of Registered Students: <?php 
                                $sql = "SELECT COUNT(*) FROM ajax";
                                $result = mysqli_query($GLOBALS['db'], $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                echo $row["COUNT(*)"];

                                 ?>
                            </p>
                        </div>
                        <p style="display: flex;justify-content: center; padding-bottom: 20px;padding-top:5px;">
                            <a href="All Courses.php?click=ajax" class="btn btn-primary " role="button " <?php if ($_SESSION['ajax'] == 1) { ?>style="margin-right: 20px;display:none" <?php } ?>>Enroll</a> <a href="Course AJAX.php" class="btn btn-default " role="button " style="margin-left: 10px;">View More</a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4">
                <div class="thumbnails" style="width: 35rem;">
                    <div class="notify">
                        <i class="fas fa-certificate fa-5x" style="color: black; margin: auto; width: 100%; padding-top: 10px;">
                        </i>
                    </div>
                    <div class="notify_text">
                        NEW
                    </div>
                    <img src="courses_logo/java.png" style="width: 35rem; height: 25rem;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="caption">
                        <h3 style="color: white; text-align: center;  background-color: black; padding: 10px; margin-top: 0px;">Java</h3>


                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">Level: Beginner</li>
                            <li class="list-group-item">Instructor: Mosh</li>
                            <li class="list-group-item">Duration: 1:09:34</li>
                        </ul> -->

                        <div class="course-details">
                            <p style=" padding-top:10px ">Level: Beginner</p>
                            <p>Instructor: Abel</p>
                            <p>Rating:
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p>
                                No. of Registered Students: <?php 
                                $sql = "SELECT COUNT(*) FROM java";
                                $result = mysqli_query($GLOBALS['db'], $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                echo $row["COUNT(*)"];

                                 ?>
                            </p>
                        </div>
                        <p style="display: flex;justify-content: center; padding-bottom: 20px;padding-top:5px;">
                            <a href="All Courses.php?click=java" class="btn btn-primary " role="button " <?php if ($_SESSION['java'] == 1) { ?>style="margin-right: 20px;display:none" <?php } ?>>Enroll</a> <a href="Course Java.php" class="btn btn-default " role="button " style="margin-left: 10px;">View More</a>
                        </p>
                    </div>
                </div>
            </div>





        </div>
    </div>


    <div class="footer-basic ">
        <footer>
            <div class="social">
                <a href="# "><i style="color: rgb(107, 253, 107); " class="fa fa-whatsapp fa-fw "></i></a>
                <a href="# "><i style="color: rgb(255, 134, 219); " class="fa fa-instagram fa-fw "></i></a>
                <a href="# "><i style="color: rgb(255, 0, 34); " class="fa fa-google-plus fa-fw "></i></a>
                <a href="# "><i style="color: rgb(110, 110, 255); " class="fa fa-facebook fa-fw "></i></a>
                <a href="# "><i style="color: rgb(251, 255, 0); " class="fa fa-snapchat-ghost fa-fw "></i></a>
            </div>

            <ul class="list-inline">
                <li style="color: black" class="list-inline-item"><a href="Help.html">Help and Support</a></li>
                <li style="color: black" class="list-inline-item"><a href="Terms.html">Terms and Conditions</a></li>
                <li style="color: black" class="list-inline-item"><a href="Privacy Policy.html">Privacy Policy</a></li>
            </ul>
            <p class="copyright">WebCoursera © 2021</p>

        </footer>
    </div>
</body>

</html>