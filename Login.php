<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    <?php
    include("config.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 

        $username = mysqli_real_escape_string($db, $_POST['emailID']);
        $password = mysqli_real_escape_string($db, $_POST['password']);



        $sql = "SELECT * FROM user WHERE emailID = '$username'";

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

    
        
        if ($count == 1 && password_verify($password, $row['password']) ) {


            $_SESSION['userID'] =  $row['userID'];
            $_SESSION['phoneNo'] =  $row['phoneNo'];

            $_SESSION['emailID'] =  $row['emailID'];
            $_SESSION['fName'] =  $row['fName'];
            $_SESSION['lName'] =  $row['lName'];

            $_SESSION['html'] =  $row['html'];
            $_SESSION['css'] =  $row['css'];
            $_SESSION['python'] =  $row['python'];
            $_SESSION['ajax'] =  $row['ajax'];
            $_SESSION['java'] =  $row['java'];
            $_SESSION['js'] =  $row['js'];

            if($row['admin'] == '0'){
                header("location: Dashboard.php");
            }
            else{
                header("location: table_stats/Course Stats.php");
            }
        } else {
            echo '<script>
                    $(document).ready(function(){
                        $("#myModal").modal(\'show\');
                    });
                </script>

                <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Invalid Login Attempt</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Incorrect Username or Password. User could not be authenticated.
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>

                    </div>
                </div>
                </div>';
        }
    }

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
                <li class="nav-bar-header"><a class="nav-bar-header" href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>


    <div class='some-page-wrapper' style="height: 550px;">
        <div class='rows'>
            <div class='columns'>
                <div class='column_left'>


                    <div class="w3-content w3-section" style="max-width:100%; max-height:100%">
                        <img class="mySlides fade" src="promotions/img1.png" style="width:100%;height:550px; background-color: white;">
                        <img class="mySlides fade" src="promotions/img2.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img3.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img4.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img5.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img6.png" style="width:100%;height:550px">
                    </div>

                </div>
            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 4000); // Change image every 2 seconds
                }
            </script>


            <div class='column'>
                <div class='column_right'>

                    <div class="card">
                        <div class="container" style="width: 400px; ">
                            <h3 class="display-4" style="text-align:center;margin-bottom: 20px; color: white;">Login</h3>
                            <form method="POST">
                                <div class="form-group">
                                    <input id="emailID" name="emailID" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" name="password" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label" style=" color: white;">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" style="background-color: rgb(252, 152, 3);">Sign in</button>

                                <div style="height:40px">
                                    <h4 class="display-4" style="text-align:center;margin-top: 25px; color: white;">OR</h4>

                                </div>
                                <a href="Dashboard.php" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm facebook">
                                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                </a>

                                <a href="Dashboard.php" class="google btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm " style="background-color: rgb(247, 78, 78);">
                                    <i class="fa fa-google fa-fw"></i> Login with Google+
                                </a>

                            </form>
                        </div>
                    </div>


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
                <li style="color: black" class="list-inline-item"><a href="Help.html">Help and Support</a></li>
                <li style="color: black" class="list-inline-item"><a href="Terms.html">Terms and Conditions</a></li>
                <li style="color: black" class="list-inline-item"><a href="Privacy Policy.html">Privacy Policy</a></li>
            </ul>
            <p class="copyright">WebCoursera © 2021</p>
        </footer>
    </div>
</body>




</html>