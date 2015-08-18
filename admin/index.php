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
  