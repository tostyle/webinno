<!DOCTYPE html>
<html lang="en">
<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innovation Technology</title>

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
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <?php include('templates/navigation.php');?>
        </nav>
     
        <!-- Content Section -->
        <section class="homeSlider" id="home-page">
            <?php require('templates/homeSlider.php');?>
        </section>
        <section class="homeLogo">
            <?php include('templates/homeLogo.php');?>
        </section>
        <section class="statInfomation clear">
           <?php include('templates/statInfomation.php');?>
        </section>
        <section class="aboutUs clear" id="aboutus-page">
           <?php include('templates/aboutUs.php');?>
        </section>
        <section class="service" id="service-page">
           <?php include('templates/service.php');?>
        </section>
        
        <section class="award" id="award-page">
           <?php include('templates/award.php');?>
        </section>
        <section class="career clear" id="career-page">
           <?php include('templates/career.php');?>
        </section>
        <section class="contactUs " id="contactus-page">
           <?php include('templates/contactUs.php');?>
        </section>
        <footer class="inno-footer">
            <?php include('templates/footer.php'); ?>
        </footer>
    </div>
    <?php include('templates/modal-award.php'); ?>
    <?php include('templates/modal-career.php'); ?>
    <?php include('templates/modal-service.php'); ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.bxslider').bxSlider({
            auto: true
          });
           $('.carousel').carousel('pause');
           $('.service-picture').click(function(event) {
                console.log(this.id);
                var pictureName =$('#'+this.id).attr('pic-name');
                $('#service-detail-picture').attr('src','photo/our-service/pic-our-service-popup'+pictureName+'.png');
                
           });
           $( ".career-link" ).hover(function() {
              $('.career-pic img').attr('src','photo/careers/'+this.id+'.jpg');
            });
            $( ".career-link" ).click(function(event) {
                var linkPosition = $('#'+this.id).text();
                console.log(linkPosition);
               $('.career-position').text(linkPosition);
           });
        });
    </script>
</body>
</html>
