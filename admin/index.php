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
    function getContent( $sectionName )
    {
        $app = Slim::getInstance();
        switch ($sectionName) {
            case 'home':
                    $sectionClass = new \Model\Home($app->db);
                break;
            case 'aboutus':
                    $sectionClass = new \Model\AboutUs($app->db);
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
        $request = json_decode($postdata);
        // $put = json_decode($put);
        var_dump($request);
    }
  