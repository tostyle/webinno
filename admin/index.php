<?php 
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

// error_reporting( error_reporting() & ~E_NOTICE );

session_start();
// if(!isset($_SESSION['loginUser']))
//     $_SESSION['loginUser']='';
    require_once '../libs/connect.php';
    require_once '../libs/class/autoload.php';
    require_once '../libs/Slim/Slim/Slim.php';


    use \Slim\Slim;
// $loader = new Slim();
// $loader->register();

    Slim::registerAutoloader();
    $app = new Slim();
    //database connect
    $app->db = $dbClass->connect; 
    $app->db->exec("set names utf8");
  

    //set view template folder
    $view = $app->view();
    $view->setTemplatesDirectory('./../templates/admin');
    //routes
    $app->get('/', 'home');
    $app->get('/menu', 'getMenus');
    $app->get('/section', 'getAllSection');
    $app->post('/uploadPic', 'uploadPic');
    $app->get('/content/:sectionName', 'getContent');
    $app->post('/content', 'updateContent');
   

    $app->run(); 
    function home($username='')
    {
        $app = Slim::getInstance();
        $app->render('admin.html');
    }
    function getMenus()
    {
        $app = Slim::getInstance();
        $menuClass =new \Model\Menu( $app->db );
        $menus = $menuClass->getData();
        echo json_encode( $menus );
    }   
    function getAllSection(){
        $app = Slim::getInstance();
        $menuClass =new \Model\Menu( $app->db );
        $menus = $menuClass->getAllSection();
        echo json_encode( $menus );
    }
    /** aboutUs
        award
        career
        firstpage
        footer
        home
        homeLogo
        menu
        modal-aboutUs
        modal-award
        modal-service
        service
        stat

     */
    function getContent( $sectionName )
    {
        $app = Slim::getInstance();
        switch ($sectionName) {
            case 'home':
                    $sectionClass = new \Model\Home($app->db);
                break;
            case 'homeLogo':
                    $sectionClass = new \Model\HomeLogo($app->db);
                break;
            case 'aboutus':
                    $sectionClass = new \Model\AboutUs($app->db);
                break;
            case 'award':
                    $sectionClass = new \Model\Award($app->db);
                break;
            case 'career':
                    $sectionClass = new \Model\Career($app->db);
                break;
            case 'firstpage':
                    $sectionClass = new \Model\ModalFirstPage($app->db);
                break;
            case 'footer':
                    $sectionClass = new \Model\Footer($app->db);
                break; 
            case 'service':
                    $sectionClass = new \Model\Service($app->db);
                break;
             case 'stat':
                    $sectionClass = new \Model\Stat($app->db);
                break;
            case 'modal-aboutUs':
                    $sectionClass = new \Model\ModalAward($app->db);
                break;
            case 'modal-award':
                    $sectionClass = new \Model\ModalAboutUs($app->db);
                break;
            case 'modal-service':
                    $sectionClass = new \Model\ModalService($app->db);
                break;
            default:
                # code...
                break;
        }
        $datas = $sectionClass->getData();
        $datas = $sectionClass->setDataByType( $datas );
        echo json_encode($datas);
    }
    function uploadPic()
    {
        $app = Slim::getInstance();
        $content = json_decode($_POST['contentDetail']);
        $targetDir = dirname($content->detail);
        $targetFile = $targetDir."/".$_FILES["file"]["name"];
        if(move_uploaded_file($_FILES["file"]["tmp_name"],'../'.$targetFile))
        {
           $sql="UPDATE content SET detail='{$targetFile}' WHERE id='{$content->id}'";
           $query = $app->db->prepare($sql);
           $query->execute();
           $result['success']=true;
        }
        else
        {
            $result['error']=true;
        }
        return $json_encode($result);
    }
    function updateContent(){
        $app = Slim::getInstance();
        $put =$app->request->post();

         $postdata = file_get_contents("php://input");
        $content = json_decode($postdata);
       
       $sql="UPDATE content SET detail='{$content->detail}' WHERE id='{$content->id}'";
           $query = $app->db->prepare($sql);
           $query->execute();
        // var_dump($content);
    }
  