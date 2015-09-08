<!DOCTYPE html>
<html lang="en">
<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

  require_once('libs/connect.php');
  require_once('libs/class/autoload.php');
  require_once('libs/class/Graph.php');
  require_once('libs/controllers/autoload.php');

  $language='en';
  if(!empty($_GET['language']))
    $language=$_GET['language'];
  /* Models */
  $menu     = new \Model\Menu($db,$language );
  $home     = new \Model\Home($db,$language);
  $homeLogo = new \Model\HomeLogo($db,$language);
  $stat     = new \Model\Stat($db,$language);
  $aboutUs  = new \Model\AboutUs($db,$language);
  $service  = new \Model\Service($db,$language);
  $award    = new \Model\Award($db,$language);
  $career   = new \Model\Career($db,$language);
  $footer   = new \Model\Footer($db,$language);
  $modalAward   = new \Model\ModalAward($db,$language);
  $modalAboutUs   = new \Model\ModalAboutUs($db,$language);
  $modalService   = new \Model\ModalService($db,$language);
  $graphModel = new \Model\Graph($db);
  $graph = $graphModel->getData();
  
  /* Controllers */
  $menuController     = new \Controller\Menu();
  $homeController     = new \Controller\Home();
  $homeLogoController = new \Controller\HomeLogo();
  $statController     = new \Controller\Stat();
  $aboutUsController  = new \Controller\AboutUs();
  $serviceController  = new \Controller\Service();
  $awardController    = new \Controller\Award();
  $careerController   = new \Controller\Career();
  $footerController   = new \Controller\Footer();
  $modalAwardController   = new \Controller\ModalAward();
  $modalAboutUsController   = new \Controller\ModalAboutUs();
  $modalServiceController   = new \Controller\ModalService();
  

  $totalService = $service->getTotalSequence();

  /* Contents*/
  $contents['menu']     = $menuController->getContent( $menu );
  $contents['home']     = $homeController->getContent( $home );
  $contents['homeLogo'] = $homeLogoController->getContent( $homeLogo );
  $contents['stat']     = $statController->getContent( $stat );
  $contents['aboutUs']  = $aboutUsController->getContent( $aboutUs );
  $contents['award']    = $awardController->getContent( $award );
  $contents['career']   = $careerController->getContent( $career );
  $contents['footer']   = $footerController->getContent( $footer );
  $contents['modalAward']   = $modalAwardController->getContent( $modalAward );
  $contents['modalAboutUs']   = $modalAboutUsController->getContent( $modalAboutUs );
  $contents['modalService']   = $modalServiceController->getContent( $modalService );
  

  /* photos */
  $photos['homeLogo'] = $homeLogoController->getPhotoContent( $homeLogo );
  $photos['stat']     = $statController->getPhotoContent( $stat );
  $photos['aboutUs']  = $aboutUsController->getPhotoContent( $aboutUs );

?>
<head>

    <meta http-equiv="Content-Type"  content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="innovation technology for energy solution">
    <meta name="author" content="innovation technology">
    <meta name="keywords" content="innovation technology,innotechnology,inno,innotech,
          innovation,
          technology,
          inno,
          energy,
          consultant,
          engineer,
          engineering,
          energy advisory,
          building,
          renewable,
          building service engineering,
          renewable energy advisory,
          productivity,
          save energy,
          saving energy,
          operation,
          maintenance,
          environment,
          Thailand,
          Green,
          Facility Management,
          Mechanical Engineering,
          Electricity,
          Energy Efficiency,
          Alternative Energy,
          Management,
          Facility,
          ประหยัดพลังงาน,
          วิศวกรพลังงาน,
          อินโนเวชั่น,
          งานวิศวกร,
          ลดต้นทุนด้านพลังงาน,
          ประหยัดไฟ,
          การอนุรักษ์พลังงาน,
          มาตรการประหยัดพลังงาน,
          พลังงาน,
          งานระบบอาคาร,
          หลักสูตรอบรมด้านพลังงาน">

    <title>Innovation Technology</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/jquery.circliful.css" rel="stylesheet">

    <!-- Custom CSS -->
 <!--    <link href="css/full-width-pics.css" rel="stylesheet"> -->
    <link href="css/mainpage.php?language=<?=$language?>" rel="stylesheet">

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
        
        <section class="award" id="awards-page">
           <?php include('templates/award.php');?>
        </section>
        <section class="career clear" id="careers-page">
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
    <?php include('templates/modal-aboutUs.php'); ?>
    <?php include('templates/modal-career.php'); ?>
    <?php include('templates/modal-service.php'); ?>
    <?php include('templates/modal-service-all.php'); ?>
    <?php include('templates/modal-firstPage.php'); ?>
  

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript">
      var homeLogoPics = <?=json_encode( $photos['homeLogo'])?> ; 
      var modalAboutUs = <?=json_encode( $contents['modalAboutUs']['detailContent'])?> ; 
    
   
        $(document).ready(function(){
           $('.circle-graph ').circliful();
          $('#firstPageModal').modal('show');
          $('#submitCareerForm').click(function(event) {
            var formData = $('#registerForm').serialize();
            $.ajax({
              url: 'libs/sendMail.php',
              type: 'POST',
              dataType: 'json',
              data: formData,
            })
            .done(function(result) {
              if(result.success)
                alert('ส่งอีเมล์ถึง HR เรียบร้อย');
            });
            
          });
          $('.bxslider').bxSlider({
            auto: true
          });
          
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
           $('.team-detail').click(function(event) {
              $('.aboutUs-detail-picture').css('background-image', 'url(' + modalAboutUs[this.id] + ')');
           });
           $('.aboutUs-detail-picture').click(function(event) {
              $("#aboutUsDetailModal").modal("hide");
           });
           $( ".career-link" ).hover(function() {
              $('.career-pic img').attr('src','photo/careers/'+this.id+'.jpg');
            });
            $( ".career-link" ).click(function(event) {
                var linkPosition = $('#'+this.id).text();
               $('.career-position').text(linkPosition);
           });
            setHomeLogo('money');
            setHomeLogo('power');
            setHomeLogo('awards');
            setDefauleServiceSlide(1);
            setDefauleServiceSlide(2);
            setDefauleServiceSlide(3);
            setDefauleServiceSlide(4);

        });

        function setHomeLogo(name)
        {
          var normalPic = homeLogoPics[name]['pic-'+name+'-normal'];
          var hoverPic =  homeLogoPics[name]['pic-'+name+'-over'];
          $('.pic-'+name).css('background-image', 'url(' + normalPic + ')');
            $('#save-'+name).hover(
               function () {
                  $('.pic-'+name).css('background-image', 'url(' + hoverPic + ')');
               }, 
                
               function () {
                   $('.pic-'+name).css('background-image', 'url(' + normalPic + ')');
               }
            );
            $('.pic-'+name).hover(
               function () {
                  $('.pic-'+name).css('background-image', 'url(' + hoverPic + ')');
               }, 
                
               function () {
                   $('.pic-'+name).css('background-image', 'url(' + normalPic + ')');
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
