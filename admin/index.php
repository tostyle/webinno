<?php 
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

// error_reporting( error_reporting() & ~E_NOTICE );

session_start();
// if(!isset($_SESSION['loginUser']))
//     $_SESSION['loginUser']='';
$root = '../';
    require_once '../libs/connect.php';
    require_once '../libs/class/autoload.php';
    require_once '../libs/class/Graph.php';
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
    $app->get('/graph', 'getGraph');
    $app->post('/graph', 'editGraph');
    $app->post('/uploadPic', 'uploadPic');
    $app->post('/addNewPic', 'addNewPic');
    $app->get('/content/:sectionName/:language', 'getContent');
    $app->post('/content', 'updateContent');
    $app->post('/newContent', 'addNewContent');
    $app->post('/deletecontent', 'deleteContent');
    $app->delete('/content', 'deleteContent');
   

    $app->run(); 
    function getGraph(){
         $app = Slim::getInstance();
         $graphClass =new \Model\Graph( $app->db);
        $graphs = $graphClass->getData();
        echo json_encode( $graphs );
    }
    function editGraph(){
         $app = Slim::getInstance();
         $sql="UPDATE graph SET 
                    head='{$_POST['head']}',
                    detail='{$_POST['detail']}',
                    value='{$_POST['value']}',
                    totalValue='{$_POST['totalValue']}'
                    WHERE id='{$_POST['id']}'";
        $query = $app->db->prepare($sql);
        $query->execute();
        $result['success']=true;
        echo json_encode($result);
    }
    function home($username='')
    {
        $app = Slim::getInstance();
        $app->render('admin.html');
    }
    function getMenus()
    {
        $app = Slim::getInstance();
        $menuClass =new \Model\Menu( $app->db,'en' );
        $menus = $menuClass->getData();
        echo json_encode( $menus );
    }   
    function getAllSection(){
        $app = Slim::getInstance();
        $menuClass =new \Model\Menu( $app->db ,'en');
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
    function getContent( $sectionName ,$language)
    {
        $app = Slim::getInstance();
        switch ($sectionName) {
            case 'home':
                    $sectionClass = new \Model\Home($app->db,$language);
                break;
            case 'homeLogo':
                    $sectionClass = new \Model\HomeLogo($app->db,$language);
                break;
            case 'aboutus':
                    $sectionClass = new \Model\AboutUs($app->db,$language);
                break;
            case 'award':
                    $sectionClass = new \Model\Award($app->db,$language);
                break;
            case 'career':
                    $sectionClass = new \Model\Career($app->db,$language);
                break;
            case 'firstpage':
                    $sectionClass = new \Model\ModalFirstPage($app->db,$language);
                break;
            case 'footer':
                    $sectionClass = new \Model\Footer($app->db,$language);
                break; 
            case 'service':
                    $sectionClass = new \Model\Service($app->db,$language);
                break;
             case 'stat':
                    $sectionClass = new \Model\Stat($app->db,$language);
                break;
            case 'modal-aboutUs':
                    $sectionClass = new \Model\ModalAboutUs($app->db,$language);
                break;
            case 'modal-award':
                    $sectionClass = new \Model\ModalAward($app->db,$language);
                break;
            case 'modal-service':
                    $sectionClass = new \Model\ModalService($app->db,$language);
                break;
            default:
                # code...
                break;
        }
        $datas = $sectionClass->getDefaultData();
        $datas = $sectionClass->setDataByType( $datas );
        echo json_encode($datas);
    }
    function getInitialContentData( $section,$language ){
         $app = Slim::getInstance();

        switch ( $section ) {
            case 'home':
                $sectionClass       = new \Model\Home($app->db,$language);
                $data['sequence']   = $sectionClass->getNewOrder();
                $data['section_id'] = 'home'.$data['sequence'];
                $data['detail'] = 'photo/slide-pic';
                $data['name'] = 'home'.$data['sequence'];
            break;
            case 'modal-award':
                $sectionClass       = new \Model\ModalAward($app->db,$language);
                $data['sequence']   = $sectionClass->getNewOrder();
                $data['section_id'] = 'pic-award0'.$data['sequence'];
                $data['detail']     = 'photo/award';
                $data['name']       = 'award';
            break;
            case 'career':
                $sectionClass       = new \Model\Career($app->db,$language);
                $data['sequence']   = $sectionClass->getNewOrder();
                $data['section_id'] = 'pic-innovation-careers0'.$data['sequence'];
                $data['detail']     = 'photo/careers';
                $data['name'] = 'career-position-pic';
            break;
            
            default:
                # code...
                break;
        }

        return $data;
        
    }
    function addNewPic(){
        $app           = Slim::getInstance();
        $content       = json_decode($_POST['contentDetail']);
        $initalContent = getInitialContentData($content->section,$content->language);
        $targetDir     = $initalContent['detail'];
        $targetFile    = $targetDir."/".$_FILES["file"]["name"];
        if(move_uploaded_file($_FILES["file"]["tmp_name"],'../'.$targetFile))
        {
            $sql="INSERT INTO content 
           (section,section_id,name,detail,type,language,sequence) VALUES  (
            '{$content->section}',
            '{$initalContent['section_id']}',
            '{$initalContent['name']}',
            '{$targetFile}',
            'photo',   'all',
            '{$initalContent['sequence']}' )";

           $query = $app->db->prepare($sql);
           $query->execute();
           $result['success']=true;
           $result['previewPic'] = $targetFile;
        }
        else
        {
            $result['error']=true;
        }
         $result['success']=true;
        return json_encode($result);
    }
    function uploadPic()
    {
        $app = Slim::getInstance();
        $content = json_decode($_POST['contentDetail']);
        $targetDir = dirname($content->detail);
        $targetFile = $targetDir."/".$_FILES["file"]["name"];
        if(file_exists($targetFile) ) {
            // chmod('your-filename.ext',0755); //Change the file permissions if allowed
            unlink($targetFile); //remove the file
        }
        if(move_uploaded_file($_FILES["file"]["tmp_name"],'../'.$targetFile))
        {
           $sql="UPDATE content SET detail='{$targetFile}' WHERE id='{$content->id}'";
           $query = $app->db->prepare($sql);
           $query->execute();
           $result['success']=true;
           $result['previewPic'] = $targetFile;
        }
        else
        {
            $result['error']=true;
        }
        echo json_encode($result);
    }
    function updateContent(){
        $app = Slim::getInstance();
        $put =$app->request->post();

         $postdata = file_get_contents("php://input");
        $content = json_decode($postdata);
       
       $sql="UPDATE content SET 
            detail='{$content->detail}' ,
            sequence='{$content->sequence}'
            WHERE id='{$content->id}'";
           $query = $app->db->prepare($sql);
           $query->execute();

        $result['success']=true;
        echo json_encode($result);
    }
    function addNewContent()
    {
           $app = Slim::getInstance();
      
         $postdata = file_get_contents("php://input");
        $content = json_decode($postdata);
        $initialContent = getInitialContentData( $content->section,$content->language );
        switch ($content->section) {
            case 'career': 
                    $sql="INSERT INTO content 
                   (section,section_id,name,detail,type,language,sequence) VALUES  (
                    '{$content->section}', '{$initialContent['section_id']}',
                    'career-position', '{$content->detail}','text',
                    'th',
                    '{$initialContent['sequence']}' )";

                   $query = $app->db->prepare($sql);
                   $query->execute();

                   $sql="INSERT INTO content 
                   (section,section_id,name,detail,type,language,sequence) VALUES  (
                    '{$content->section}', '{$initialContent['section_id']}',
                    'career-position', '{$content->engDetail}','text',
                    'en',
                    '{$initialContent['sequence']}' )";

                   $query = $app->db->prepare($sql);
                   $query->execute();
                break;
            
            default:
                # code...
                break;
        }
       
         $result['success']=true;
        return json_encode($result);
    }
    function deleteContent(){
          $app = Slim::getInstance();
       $deleteData =$app->request->delete();
       $sql="DELETE FROM content WHERE id='{$deleteData['id']}'";
       $result['success']=true;
        echo json_encode($result);
    }
  