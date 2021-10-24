<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Course</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <?php
    include("config.php");
    session_start();
    function remove_user()
    {
        $id = $_SESSION['userID'];

        $sql = "DELETE FROM ajax 
            WHERE `user`.`userID` = '$id'";;
        $result = mysqli_query($GLOBALS['db'], $sql);

        $sql = "UPDATE `user` SET `ajax` = '0' 
            WHERE `user`.`userID` = '$id'";
        $result = mysqli_query($GLOBALS['db'], $sql);
        $_SESSION['ajax'] = 0;
        header("location: Dashboard.php");
    }


    if (isset($_GET['click'])) {

        // remove_user();

        // $filename = './courses_logo/python.png';
        // $contenttype = "application/force-download";
        // header("Content-Type: " . $contenttype);
        // header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");
        // readfile("your file uploaded path" . $filename);
        remove_user();
    }



    ?>

    <nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="Dashboard.html" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="Course AJAX.html">AJAX</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.html">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="form-inline my-2 my-lg-0" style="display: flex;">
                        <input style="color: red; border-radius: 10px; margin-top: 12px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button style="background-color: rgb(228, 224, 224); border-radius: 10px; margin-left: 6px; margin-top: 12px; margin-right: 10px;" class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
                    </form>
                </li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>


            </ul>
        </div>

    </nav>

    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 60%;">
            <div class="mb-3">
                <div class="card_course_details" style="height: 320px;">
                    <div class="card-body">
                        <div class="float-container-new-course border-line">
                            <div class="float-child-new-course" style="width:20%; text-align: center;">
                                <img src="courses_icon/ajax.png" alt="Admin" class="rounded-circle" width="150px" height="150px" style="margin-top:25px; background-color: white; border-width: 1px; border-color: black; border-style: solid; border-radius: 20px;">
                                <h3 style="margin-top: 20px; ">AJAX</h3>
                                <p>Instructor: Christopher</p>

                            </div>
                            <div class="vr">
                            </div>
                            <div class="float-child-new-course" style="width:40%; padding:15px">
                                <h4>Course Details</h4>
                                <p>AJAX stands for Asynchronous JavaScript and XML. AJAX is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Java Script. AJAX uses XHTML for content,
                                    CSS for presentation, along with Document Object Model and JavaScript for dynamic content display.
                                </p>
                            </div>
                            <div class="vr">
                            </div>
                            <div class="float-child-new-course" style="width:40%;">
                                <h4 style="margin-left: 15px; margin-top: 25px;">References</h4>
                                <ol style="margin-right: 10px;">
                                    <li>Ajax A new programming model for the Web Author(s): Juan M. Gimeno, Josep M. Ribo</li>
                                    <br>
                                    <li>AJAX and JSON with jQuery, JSON and the usage of AJAX and JSON with jQuery. Author(s): MIT</li>
                                    <br>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 30%;">
            <div>
                <div class="mb-3">
                    <div class="card_eval_course">
                        <div class="card-body">
                            <h4 class="d-flex align-items-center mb-3">
                                Upcoming Evaluations
                            </h4>

                            <div class="indiv_eval test_course">
                                <h5>AJAX - Mid Evaluation</h5>
                                <h5>24th September, 2021</h5>
                            </div>
                            <div class="indiv_eval assg_course">
                                <h5>AJAX - Excercise 15</h5>
                                <h5>28st September, 2021</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <div class="card_result_course">
                        <div class="card-body">
                            <h4 class="d-flex align-items-center mb-3">
                                Previous Results
                            </h4>

                            <div class="indiv_eval assg_course">
                                <h5>AJAX - Assignment 1</h5>
                                <h4>25 / 40</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="option_filters">
        <div class="options_duration" style="width: 25%">

            <a class="duration_button" href="course AJAX/Course AJAX Short.html">Short</a>
            <a class="duration_button" href="course AJAX/Course AJAX Medium.html ">Medium</a>
            <a class="duration_button" href="course AJAX/Course AJAX Long.html ">Long</a>
        </div>

        <div class="options_duration" style="width: 25% ">
            <a class="duration_button" href="course AJAX/Course AJAX Week 1.html">Week 1</a>
            <a class="duration_button" href="course AJAX/Course AJAX Week 2.html">Week 2</a>
            <a class="duration_button" href="course AJAX/Course AJAX Week 3.html">Week 3</a>
        </div>
    </div>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table class="sortable">
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">S.No.</th>
                                <th class="column2">Lecture</th>
                                <th class="column3">Date (DD/MM/YYYY)</th>
                                <th class="column4">Description</th>
                                <th class="column5">Duration (mins)</th>
                                <th class="column6">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="column1">001</td>
                                <td class="column2">Introduction</td>
                                <td class="column3">02/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">24</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">002</td>
                                <td class="column2">jQuery vs Ajax</td>
                                <td class="column3">05/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">25</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">003</td>
                                <td class="column2">Synchronous Communication</td>
                                <td class="column3">09/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">42</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">004</td>
                                <td class="column2">Asynchronous Communication</td>
                                <td class="column3">13/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">61</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">005</td>
                                <td class="column2">Ajax-based Web App Architecture</td>
                                <td class="column3">15/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">114</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">006</td>
                                <td class="column2">Ajax Engine</td>
                                <td class="column3">18/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">67</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">007</td>
                                <td class="column2">Ready State and Responses</td>
                                <td class="column3">21/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">25</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">008</td>
                                <td class="column2">Open Function</td>
                                <td class="column3">25/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">64</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">009</td>
                                <td class="column2">Send String Function</td>
                                <td class="column3">29/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">42</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">010</td>
                                <td class="column2">Request Headers</td>
                                <td class="column3">02/10/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">49</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">011</td>
                                <td class="column2">Ajax Application Flow</td>
                                <td class="column3">06/10/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">75</td>
                                <td class="column6"><a href="https://www.youtube.com/watch?v=ACNGhBfNftA&list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU">Watch Now</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <fieldset style="margin:auto; width:50%; padding-left:10%;">
        <div>
            <input type="checkbox" id="end_check" onclick="myFunction()">
            <label for="end_check" style="width: 80%; padding-left:10px; display:inline-block; vertical-align:top;">
                I have finished watching all videos and wish to end the course. I understand that once my end the course, I will not be able to access the course materials again until I re-register for the course.</label>


            <button type="button" onclick="location.href='Course AJAX.php?click=remove';" class="btn btn-danger" id="cancel" style="display: none;margin-left:20%; margin-top:20px;">De - Enroll From The Course</button>


                <script>
                    function myFunction() {
                        var checkBox = document.getElementById("end_check");

                        var text = document.getElementById("cancel");
                        if (checkBox.checked == true) {
                            text.style.display = "block";
                        } else {
                            text.style.display = "none";
                        }
                    }
                </script>

        </div>
    </fieldset>

    <div class="footer-basic" style="margin-top: 30px;">
        <footer>
            <div class="social">
                <a href="#"><i style="color: rgb(107, 253, 107);" class="fa fa-whatsapp fa-fw"></i></a>
                <a href="#"><i style="color: rgb(255, 134, 219);" class="fa fa-instagram fa-fw"></i></a>
                <a href="#"><i style="color: rgb(255, 0, 34);" class="fa fa-google-plus fa-fw"></i></a>
                <a href="#"><i style="color: rgb(110, 110, 255);" class="fa fa-facebook fa-fw"></i></a>
                <a href="#"><i style="color: rgb(251, 255, 0);" class="fa fa-snapchat-ghost fa-fw"></i></a>
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