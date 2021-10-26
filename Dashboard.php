<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php
    include("config.php");
    session_start();
    ?>

    <nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="#" style="font-size: 25px;">WebCoursera</a></li>
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


    <div style="width: 100%; display: flex; justify-content: space-evenly; ">
        <div class="col-md-6 mb-3 ">
            <div class="card_profile ">
                <div class="card-body ">
                    <div class="float-container-new ">
                        <div class="float-child-new ">
                            <img src="user_images/profile_user.png " alt="Admin " class="rounded-circle " width="150px " style="background-color: white; margin:15px; margin-left: 10px;border-radius: 50%; border-width: 1px; border-color: black; border-style:
                        solid; ">
                        </div>
                        <div class="float-child-new mt-3 d-flex flex-column align-items-center text-center ">
                            <h3> <?php echo $_SESSION['fName'], " ", $_SESSION['lName']; ?> </h3>
                            <p style="margin-bottom:5px ">Student</p>
                            <p style="margin-bottom:5px "><?php echo $_SESSION['emailID']; ?></p>
                            <p style="margin-bottom:5px "><?php echo $_SESSION['phoneNo']; ?></p>
                            <button style="display:none;" class='edit_button'>Edit Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3 ">
            <div class="card_progress h-100 ">
                <div class="card-body ">
                    <h4 class="d-flex align-items-center mb-3 ">
                        Current Progress
                    </h4>
                    <div class="indiv_eval ">
                        <p style="font: 8px; ">Web Design</p>
                        <p style="font: 8px; ">80%</p>
                    </div>
                    <div class="progress mb-3 " style="height: 6px; margin-top: 0px; ">
                        <div class="progress-bar bg-primary " role="progressbar " style="width: 80% " aria-valuenow="80" aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>


                    <div class="indiv_eval ">
                        <p style="font: 8px; ">Javascript</p>
                        <p style="font: 8px; ">29%</p>
                    </div>
                    <div class="progress mb-3 " style="height: 6px ">
                        <div class="progress-bar bg-primary " role="progressbar " style="width: 29% " aria-valuenow="29 " aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <div class="indiv_eval ">
                        <p style="font: 8px; ">Python</p>
                        <p style="font: 8px; ">59%</p>
                    </div>
                    <div class="progress mb-3 " style="height: 6px ">
                        <div class="progress-bar bg-primary " role="progressbar " style="width: 50% " aria-valuenow="89 " aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>

                </div>
            </div>
        </div>



        <div class="col-md-6 mb-3 ">
            <div class="card_eval h-100 ">
                <div class="card-body ">
                    <h4 class="d-flex align-items-center mb-3 ">
                        Upcoming Evaluations
                    </h4>

                    <div class="indiv_eval ">
                        <h5>HTML - Mid Evaluation</h5>
                        <h5>24th September, 2021</h5>
                    </div>
                    <div class="indiv_eval ">
                        <h5>Javascript - Test 5</h5>
                        <h5>28st September, 2021</h5>
                    </div>
                    <div class="indiv_eval ">
                        <h5>CSS - Final Evaluation</h5>
                        <h5>30th September, 2021</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="indiv_course ">


        <div class="card-course " <?php if ($_SESSION['html'] == 0) { ?>style="display:none" <?php } ?>>

            <img src="courses_logo/html.png" class="indiv-image-card ">
            <div class='card-details' style="margin-left: 20px ">

                <div class="card-data ">
                    <h3 style="color: white ">HTML</h3>
                    <p style="color: white ">Mosh</p>
                </div>
                <button style="margin-top: 30px; background-color: black; height: 40px; margin-right: 20px; color: white; border-style: solid; border-color: white; border-radius: 5px; ">
                    <a class="goto_course" href="Course HTML.php">
                        <p style="font-size: 20px; margin-top: 2px ">
                            Continue
                        </p>
                    </a>
                </button>
            </div>
        </div>
        <div class="card-course " <?php if ($_SESSION['css'] == 0) { ?>style="display:none" <?php } ?>>
            <img src="courses_logo/css.png" class="indiv-image-card ">
            <div class='card-details' style="margin-left: 20px ">

                <div class="card-data ">
                    <h3 style="color: white ">CSS</h3>
                    <p style="color: white ">Michael</p>
                </div>
                <button style="margin-top: 30px; background-color: black; height: 40px; margin-right: 20px; color: white; border-style: solid; border-color: white; border-radius: 5px; ">
                    <a class="goto_course" href="Course CSS.php">
                        <p style="font-size: 20px; margin-top: 2px ">
                            Continue
                        </p>
                    </a> </button>
            </div>


        </div>
        <div class="card-course " <?php if ($_SESSION['python'] == 0) { ?>style="display:none" <?php } ?>>
            <img src="courses_logo/python.png " class="indiv-image-card ">
            <div class='card-details' style="margin-left: 20px ">

                <div class="card-data ">
                    <h3 style="color: white ">Python</h3>
                    <p style="color: white ">Surya</p>
                </div>
                <button style="margin-top: 30px; background-color: black; height: 40px; margin-right: 20px; color: white; border-style: solid; border-color: white; border-radius: 5px; ">
                    <a class="goto_course" href="Course Python.php">
                        <p style="font-size: 20px; margin-top: 2px ">
                            Continue
                        </p>
                    </a>
                </button>
            </div>
        </div>
        <div class="card-course " <?php if ($_SESSION['js'] == 0) { ?>style="display:none" <?php } ?>>
            <img src="courses_logo/javascript.png " class="indiv-image-card ">
            <div class='card-details' style="margin-left: 20px ">

                <div class="card-data ">
                    <h3 style="color: white ">Javascript</h3>
                    <p style="color: white ">Sarah</p>
                </div>
                <button style="margin-top: 30px; background-color: black; height: 40px; margin-right: 20px; color: white; border-style: solid; border-color: white; border-radius: 5px; ">
                    <a class="goto_course" href="Course JS.php">
                        <p style="font-size: 20px; margin-top: 2px ">
                            Continue
                        </p>
                    </a>
                </button>
            </div>
        </div>
        <div class="card-course " <?php if ($_SESSION['ajax'] == 0) { ?>style="display:none" <?php } ?>>
            <img src="courses_logo/ajax.png " class="indiv-image-card ">
            <div class='card-details' style="margin-left: 20px ">

                <div class="card-data ">
                    <h3 style="color: white ">Ajax</h3>
                    <p style="color: white ">Christopher</p>
                </div>
                <button style="margin-top: 30px; background-color: black; height: 40px; margin-right: 20px; color: white; border-style: solid; border-color: white; border-radius: 5px; ">
                    <a class="goto_course" href="Course AJAX.php">
                        <p style="font-size: 20px; margin-top: 2px ">
                            Continue
                        </p>
                    </a>
                </button>
            </div>
        </div>
        <div class="card-course " <?php if ($_SESSION['java'] == 0) { ?>style="display:none" <?php } ?>>
            <img src="courses_logo/java.png " class="indiv-image-card ">
            <div class='card-details' style="margin-left: 20px ">

                <div class="card-data ">
                    <h3 style="color: white ">Java</h3>
                    <p style="color: white ">Abel</p>
                </div>
                <button style="margin-top: 30px; background-color: black; height: 40px; margin-right: 20px; color: white; border-style: solid; border-color: white; border-radius: 5px; ">
                    <a class="goto_course" href="Course Java.php">
                        <p style="font-size: 20px; margin-top: 2px ">
                            Continue
                        </p>
                    </a>
                </button>
            </div>

        </div>

    </div>



    <div class="footer-basic <?php if ($_SESSION['java'] == 0 && $_SESSION['python'] == 0 && $_SESSION['ajax'] == 0 && $_SESSION['css'] == 0 && $_SESSION['js'] == 0 && $_SESSION['html'] == 0 ) echo 'fix';  ?>  ">
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

        </footer>
    </div>
</body>




</html>