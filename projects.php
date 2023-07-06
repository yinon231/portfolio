<?php
include "db.php";
$query="SELECT * FROM portfolioSh.portfolio_YinonMaman";
$result=mysqli_query($connection,$query);
if(!$result)
{
   die ("DB query failed.");
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8"/>
        <title>Yinon Maman</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <script src="vendor/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>      
    </head>
    <body id="body" data-spy="scroll" data-target=".header">
    <header class="header navbar-fixed-top">
            <nav class="navbar">
                <div class="container">
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img" src="img/logo1.png" alt="Asentus Logo">
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.html">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#">projects</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
      
        <div id="work">
            <div class="container content-lg">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Projects</h2>
                        <p>You can see and view my latest works</p>
                    </div>
                </div> 

                <div class="row"> 
                <?php 
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<div id='".$row['id']."' class='col-sm-4 sm-margin-b-50'>";
                        echo "<div class='margin-b-20'>";
                        echo "<div class='wow zoomIn' data-wow-duration='.3' data-wow-delay='.1s'>";
                        echo "<img class='img-responsive' src='".$row['image']."' alt='Latest Products Image'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<h4><a href='#'>".$row['ex_name']."</a> <span class='text-uppercase margin-l-20'>".$row['ex_number']."</span></h4>";
                        echo "<p>".$row['detail']."</p>";
                        echo "<a class='urlGit' href=".$row['github']." target='_blank'>".$row['github']."</a>";
                        echo "<a class='link read-more' href='#link read more'>Read More</a>";
                        echo "</div>";
                    }

                ?>
                </div>
             </div>
        </div>
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo1.png" alt="Acecv Logo">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="m-0"><a class="text-white font-weight-bold" href=" https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה בשנקר</a><a class="text-white font-weight-bold"></a>                    </div>
                </div>
            </div>
        </footer>
</body>
</html>