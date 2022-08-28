<?php

class ClientController{

    public function register(){
            require_once('views/templates/header.php');
            require_once('views/client/register.php');
            require_once('views/templates/footer.php');
        }

    public function registerView(){
        
        $arrayClient = array(
            'name'=> $_POST['name'],
            'login'=> $_POST['login'],
            'gender'=> $_POST['gender'],
            'accept'=> $_POST['accept'],
            'opção'=> $_POST['opção']
        );
        require_once('views/templates/header.php');
        require_once('views/client/registerView.php');
        require_once('views/templates/footer.php');
        
    }
       
}