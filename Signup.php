<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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

    $fName = mysqli_real_escape_string($db, $_POST['fName']);
    $lName = mysqli_real_escape_string($db, $_POST['lName']);
    $emailID = mysqli_real_escape_string($db, $_POST['inputEmail']);
    $phoneNo = mysqli_real_escape_string($db, $_POST['inputPhone']);
    $password = mysqli_real_escape_string($db, $_POST['inputPassword']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);



    if($password != $confirmPassword){
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
                        <h4 class="modal-title">Invalid Registration Attempt</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Passwords do not match. User could not be registered.
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>

                    </div>
                </div>
                </div>';
    }
    else {
    $sql = "SELECT * FROM user WHERE emailID = '$emailID'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
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
                        <h4 class="modal-title">Duplicate Registration Attempt</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        This email has already been registered. Please try registering with another email.
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>

                    </div>
                </div>
                </div>';
    }

    else if($count == 0){

        

        $id = uniqid(true);
        $options = ['cost' => 12,];
        $hashed = password_hash($password, PASSWORD_DEFAULT, $options);

        $sql = "INSERT INTO user (userID, emailID, fName, lName, password, phoneNo, gender, html, css, js, java, python, ajax) 
        VALUES ('$id', '$emailID', '$fName', '$lName', '$hashed', '$phoneNo', '$gender', '0', '0', '0', '0', '0', '0')";
        $result = mysqli_query($db, $sql);

        $_SESSION['userID'] =  $id;
        $_SESSION['phoneNo'] =  $phoneNo;

        $_SESSION['emailID'] =  $emailID;
        $_SESSION['fName'] =  $fName;
        $_SESSION['lName'] =  $lName;

        $_SESSION['html'] =  0;
        $_SESSION['css'] =  0;
        $_SESSION['python'] =  0;
        $_SESSION['ajax'] =  0;
        $_SESSION['java'] =  0;
        $_SESSION['js'] =  0;


        header("location: Dashboard.php");
  
        }

    }
}

?>

    <nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="#" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.html">Courses</a></li>
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
                <div class='column_right' >

                    <div class="card" style="padding-top: 0px;">
                        <div class="container" style="width: 400px;">
                            <h3 class="display-4" style="text-align:center;margin-bottom: 10px; color: white;">Sign Up</h3>
                            <form method=POST>
                                <div class="form-group">
                                    <input name="fName" type="text" placeholder="First Name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group">
                                    <input name="lName" type="text" placeholder="Last Name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group">
                                    <input name="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>

                                <div class="form-group mb-3">
                                    <input name="inputPhone" type="number" placeholder="Phone Number" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="form-group mb-3">
                                    <input name="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="form-group mb-3">
                                    <input name="confirmPassword" type="password" placeholder="Confirm Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div style="display: flex; justify-content: space-between;" class="custom-control custom-radio mb-3">
                                    <div style="margin: 5px; margin-bottom: 10px; color: white;">
                                        Gender
                                    </div>
                                    <div style=" color: white;" >

                                        <input id="customRadio1" type="radio" name="gender" value="Male" checked>
                                        <label style="padding-right: 10px;" for="customRadio1">Male</label>
                                        <input id="customRadio2" type="radio" name="gender" value="Female">
                                        <label style="padding-right: 10px;" for="customRadio2">Female</label>
                                        <input id="customRadio3" type="radio" name="gender" value="Others">
                                        <label for="customRadio3">Others</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" style="background-color: rgb(252, 152, 3);">Sign Up</button>




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
        </footer>
    </div>
</body>




</html>