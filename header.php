<!DOCTYPE html>
<html lang="en">
<head>

<!-- Dynamic Title -->
<?php
$path=$_SERVER['PHP_SELF'];
$title=basename($path);
switch ($title){
case "index.php":
$title= "Home | Women's Model College";
break;
case  "about.php":
$title= "About Us | Women's Model College";
break;
case  "academic.php":
$title= "Academic | Women's Model College";
break;
case  "admission.php":
$title= "Admission | Women's Model College";
break;
case  "blog.php":
$title= "Blog | Women's Model College";
break;
case  "career.php":
$title= "Career | Women's Model College";
break;
case  "club.php":
$title= "Club | Women's Model College";
break;
case  "contact.php":
$title= "Contact | Women's Model College";
break;
case  "event-gallery.php":
$title= "Event Gallery | Women's Model College";
break;
case  "general-gallery.php":
$title= "General Gallery | Women's Model College";
break;
case  "hostel.php":
$title= "Hostel | Women's Model College";
break;
case  "notice.php":
$title= "Notice | Women's Model College";
break;
case  "principal.php":
$title= "Principle | Women's Model College";
break;
case  "single-gallery.php":
$title= "Gallery | Women's Model College";
break;
case  "staff.php":
$title= "Staff | Women's Model College";
break;
case  "teachers.php":
$title= "Teachers | Women's Model College";
break;
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title><?php echo $title;?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

    <!-- Header Top Start Here -->
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="header-left">
                        <a href=""><i class="fa fa-envelope"></i> info@halim.com</a>
                        <a href=""><i class="fa fa-phone"></i> 23457689</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-end">
                    <div class="header-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Top End Here -->

    <!-- Header Area Start Here -->
    <header class="header header-fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="logo">
                        <a href="">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 text-end">
                    <nav class="mainmenu">
                        <ul id="navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li class="has-child"><a href="about.php">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="academic.php">Academic</a></li>
                                    <li><a href="principal.php">Principle/Chairmen</a></li>
                                    <li><a href="teachers.php">Teachers</a></li>
                                    <li><a href="staff.php">Staff member</a></li>
                                    <li><a href="club.php">Club</a></li>
                                </ul>
                            </li>
                            <li class="has-child"><a href="#">Photo Gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="general-gallery.php">General Gallery</a></li>
                                    <li><a href="event-gallery.php">Event Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="admission.php">Admission</a></li>
                            <li><a href="notice.php">Notice Board</a></li>
                            <li><a href="blog.php">Blogs</a></li>
                            <li><a href="hostel.php">Hostel</a></li>
                            <li><a href="career.php">Career</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->

<body>

<!-- Preloader -->
<div id="preloader">
  <div id="loader"></div>
</div>
