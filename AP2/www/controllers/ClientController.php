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
            
        );
        require_once('views/templates/header.php');
        require_once('views/client/registerView.php');
        require_once('views/templates/footer.php');
        
        
    }
    public function listClients(){

        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $result = $clientModel -> listClients();

        $arrayClients = array();

        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }
        require_once('views/templates/header.php');
        require_once('views/client/listClients.php');
        require_once('views/templates/footer.php');

    }
       
}