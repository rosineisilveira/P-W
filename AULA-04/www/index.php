<?php
    
    if(!isset($_GET['controller'])){
        require_once('controllers/SiteController.php');
        $SiteController = new SiteController();
        $SiteController -> home();
    }else{
        switch ($_REQUEST['controller']) {
            case 'site':
                require_once('controllers/SiteController.php');
                $SiteController = new SiteController();
                if(!isset($_GET['action'])){
                    $SiteController -> home();
                }else{
                    switch ($_GET['action']){
                        case 'home':
                            $SiteController -> home();
                            break;
                        case 'produtos':
                            $SiteController -> produtos();
                            break;
                        case 'contatos':
                            $SiteController -> contatos();
                            break;
                        case 'about':
                            $SiteController -> about();
                            break;                                  
                        }
                    }
            break;
            case 'client':
                require_once('controllers/ClientController.php');
                $ClientController = new ClientController();
                if(!isset($_GET['action'])){
                    //ação
                }else{
                    switch ($_REQUEST['action']) {
                        case 'register':
                            $ClientController -> register();

                            break;
                        case'registerView':
                            $ClientController -> registerView();
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
                break;







        }   
        
        




    }    
?>