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
    <meta name="description" content="innovation technology for enegy solution">
    <meta name="author" content="innovation technology">
    <meta name="keywords" content="innovation technology,innotechnology,inno,innotech">

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
    <?php include('templates/modal-firstPage.php'); ?>
    <?php include('templates/modal-service-1.php'); ?>
    <?php include('templates/modal-service-2.php'); ?>
    <?php include('templates/modal-service-3.php'); ?>
    <?php include('templates/modal-service-4.php'); ?>

    
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
          $('#firstPageModal').modal('show');
           $('.carousel').carousel({
                interval :false
           });
          
           $('.carousel-service-1').carousel('pause');
           $('.carousel-service-2').carousel('pause');
           $('.carousel-service-3').carousel('pause');
           $('.carousel-service-4').carousel('pause');
           $('.service-picture').click(function(event) {
             $('.carousel').carousel('pause');
             
           });
           $( ".career-link" ).hover(function() {
              $('.career-pic img').attr('src','photo/careers/'+this.id+'.jpg');
            });
            $( ".career-link" ).click(function(event) {
                var linkPosition = $('#'+this.id).text();
                console.log(linkPosition);
               $('.career-position').text(linkPosition);
           });
            setHomeLogo('money');
            setHomeLogo('power');
            setHomeLogo('awards');
            setDefauleServiceSlide(1);
            setDefauleServiceSlide(2);
            setDefauleServiceSlide(3);
            setDefauleServiceSlide(4);
//#carousel-generic-service-2 > div > div:nth-child(1)

        });

        function setHomeLogo(name)
        {
            $('#save-'+name).hover(
               function () {
                  $('.pic-'+name).css('background-image', 'url(' + "photo/icon-saving-"+name+"-over.png" + ')');
               }, 
                
               function () {
                   $('.pic-'+name).css('background-image', 'url(' + "photo/icon-saving-"+name+".png" + ')');
               }
            );
            $('.pic-'+name).hover(
               function () {
                  $('.pic-'+name).css('background-image', 'url(' + "photo/icon-saving-"+name+"-over.png" + ')');
               }, 
                
               function () {
                   $('.pic-'+name).css('background-image', 'url(' + "photo/icon-saving-"+name+".png" + ')');
               }
            );
        }
        function setDefauleServiceSlide(serviceNo)
        {
             $('#modal-service-'+serviceNo).on('hidden.bs.modal', function () {
                $('#carousel-generic-service-'+serviceNo+' > div > div:nth-child(2)').removeClass('active');
                $('#carousel-generic-service-'+serviceNo+' > div > div:nth-child(1)').addClass('active');
                
            })
        }
        function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');
      
        // Dividing by two centers the modal exactly, but dividing by three 
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
    </script>
</body>
</html>
