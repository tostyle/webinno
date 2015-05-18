<!DOCTYPE html>
<html lang="en">
<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Width Pics - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">

    <!-- Custom CSS -->
 <!--    <link href="css/full-width-pics.css" rel="stylesheet"> -->
    <link href="css/mainpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="content">
        
    
        
    <!-- Navigation -->
    <div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </div>
    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
  <!--   <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="http://placehold.it/200x200&text=Logo" alt="">
    </header> -->

    <!-- Content Section -->
    <section class="homeSlider">
        <?php require('templates/homeSlider.php');?>
    </section>
    <section class="homeLogo">
        <?php include('templates/homeLogo.php');?>
    </section>
    <section class="statInfomation clear">
       <?php include('templates/statInfomation.php');?>
    </section>
    <section >
       <?php include('templates/service.php');?>
    </section>
    <section class="aboutUs clear">
       <?php include('templates/aboutUs.php');?>
    </section>
    <section class="award">
       <?php include('templates/award.php');?>
    </section>
    <section class="career">
       <?php include('templates/career.php');?>
    </section>
    <section class="contactUs clear">
       <?php include('templates/contactUs.php');?>
    </section>
    <footer class="inno-footer">
        <?php include('templates/footer.php'); ?>
    </footer>
   
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
  $('.bxslider').bxSlider({
    auto: true
  });
});
    </script>
</body>

</html>
