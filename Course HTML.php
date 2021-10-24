<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Course</title>
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

        $sql = "DELETE FROM html 
            WHERE `user`.`userID` = '$id'";;
        $result = mysqli_query($GLOBALS['db'], $sql);

        $sql = "UPDATE `user` SET `html` = '0' 
            WHERE `user`.`userID` = '$id'";
        $result = mysqli_query($GLOBALS['db'], $sql);
        $_SESSION['html'] = 0;
        header("location: Dashboard.php");

    }


    if (isset($_GET['click'])) {
        remove_user();
    }



    ?>


    <nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="Dashboard.php" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="Course HTML.php">HTML</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.php">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="form-inline my-2 my-lg-0" style="display: flex;">
                        <input style="color: red; border-radius: 10px; margin-top: 12px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button style="background-color: rgb(228, 224, 224); border-radius: 10px; margin-left: 6px; margin-top: 12px; margin-right: 10px;" class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
                    </form>
                </li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>


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
                                <img src="courses_icon/html.png" alt="Admin" class="rounded-circle" width="150px" height="150px" style="margin-top:25px; background-color: white; border-width: 1px; border-color: black; border-style: solid; border-radius: 20px;">
                                <h3 style="margin-top: 20px; ">HTML</h3>
                                <p>Instructor: Mosh</p>

                            </div>
                            <div class="vr">
                            </div>
                            <div class="float-child-new-course" style="width:40%; padding:15px">
                                <h4>Course Details</h4>
                                <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages
                                    such as JavaScript. Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page.
                                </p>
                            </div>
                            <div class="vr">
                            </div>
                            <div class="float-child-new-course" style="width:40%;">
                                <h4 style="margin-left: 15px; margin-top: 25px;">References</h4>
                                <ol style="margin-right: 10px;">
                                    <li>HTML 101: The Essential Beginner's Guide to Learning HTML Coding (Essential Coding), Author - Jo Foster</li>
                                    <br>
                                    <li>HTML CSS in 8 Hours, For Beginners, Learn Coding Fast!, Author - Ray Yao</li>
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
                                <h5>HTML - Final Evaluation</h5>
                                <h5>30th September, 2021</h5>
                            </div>
                            <div class="indiv_eval assg_course">
                                <h5>HTML - Excercise 12</h5>
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

                            <div class="indiv_eval test_course">
                                <h5>HTML - Mid Evaluation</h5>
                                <h4>28 / 40</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="option_filters">
        <div class="options_duration" style="width: 25%">
            <a class="duration_button" href="course HTML/Course HTML Short.html ">Short</a>
            <a class="duration_button" href="course HTML/Course HTML Medium.html ">Medium</a>
            <a class="duration_button" href="course HTML/Course HTML Long.html ">Long</a>
        </div>

        <div class="options_duration" style="width: 25% ">
            <a class="duration_button" href="course HTML/Course HTML Week 1.html">Week 1</a>
            <a class="duration_button" href="course HTML/Course HTML Week 2.html">Week 2</a>
            <a class="duration_button" href="course HTML/Course HTML Week 3.html">Week 3</a>
        </div>
    </div>

    <div class="container-table100 ">
        <div class="wrap-table100 ">
            <div class="table100 ">
                <table class="sortable ">
                    <thead>
                        <tr class="table100-head ">
                            <th class="column1 ">S.No.</th>
                            <th class="column2 ">Lecture</th>
                            <th class="column3 ">Date</th>
                            <th class="column4 ">Description</th>
                            <th class="column5 ">Duration (mins)</th>
                            <th class="column6 ">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="column1 ">001</td>
                            <td class="column2 ">Introduction</td>
                            <td class="column3 ">02/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">54</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=Mp0f0zTPLec&list=PL081AC329706B2953">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">002</td>
                            <td class="column2 ">Creating a basic template</td>
                            <td class="column3 ">05/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">95</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=qseNjA-73Fw&list=PL081AC329706B2953&index=2">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">003</td>
                            <td class="column2 ">Setting up the body</td>
                            <td class="column3 ">09/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">28</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=eDR7zpVfX_4&list=PL081AC329706B2953&index=3">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">004</td>
                            <td class="column2 ">Attribute Selectors</td>
                            <td class="column3 ">13/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">43</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=a5KD47HDRho&list=PL081AC329706B2953&index=5">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">005</td>
                            <td class="column2 ">Introduction to pseudo-classes</td>
                            <td class="column3 ">15/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">114</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=0pb81VdSO_E&list=PL081AC329706B2953&index=6">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">006</td>
                            <td class="column2 ">Negation pseudo-class</td>
                            <td class="column3 ">18/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">17</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=JaLebQ-QDVo&list=PL081AC329706B2953&index=7">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">007</td>
                            <td class="column2 ">CSS3 Selectors</td>
                            <td class="column3 ">21/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">55</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=tIznbrsfQZQ&list=PL081AC329706B2953&index=8">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">008</td>
                            <td class="column2 ">Laying Out the Website</td>
                            <td class="column3 ">25/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">64</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=Q7eoOSZ7JdY&list=PL081AC329706B2953&index=9">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">009</td>
                            <td class="column2 ">Styling</td>
                            <td class="column3 ">29/09/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">22</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=P71U-doyzNg&list=PL081AC329706B2953&index=10">Watch Now</a></td>
                        </tr>
                        <tr>
                            <td class="column1 ">010</td>
                            <td class="column2 ">Finishing the Layout</td>
                            <td class="column3 ">02/10/2021</td>
                            <td class="column4 ">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                            <td class="column5 ">32</td>
                            <td class="column6 "><a href="https://www.youtube.com/watch?v=tzAEGnBNAn0&list=PL081AC329706B2953&index=13">Watch Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <fieldset style="margin:auto; width:50%; padding-left:10%;">
        <div>
            <input type="checkbox" id="end_check" onclick="myFunction()">
            <label for="end_check" style="width: 80%; padding-left:10px; display:inline-block; vertical-align:top;">
            I have finished watching all the videos and wish to end the course. I understand that once I end the course, I will not be able to access the course materials until I enroll for the course again.</label>


<button type="button" onclick="location.href='Course HTML.php?click=remove';" class="btn btn-danger" id="cancel" style="display: none;margin-left:20%; margin-top:20px;"><a style="text-decoration:none; color:white;" href="certificates/html.png" download="Fundamentals of HTML Course Certificate">De-enroll From The Course</a></button>


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

    <div class="footer-basic " style="margin-top: 30px;">
        <footer>
            <div class="social ">
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