<?php

class ContactModel{

    var $connection;

    public function __construct(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $this -> connection = $connectClass -> getConn();
    }

    public function listContacts(){
        $sql = "SELECT * from contacts";
        return $this -> connection -> query($sql);
        
    }

    public function consultContact($idContact){
        $sql = "
                SELECT * from contacts
                where
                   idContact = $idContact
                  ";             
        return $this -> connection -> query($sql);
    }

    public function insertContact($arrayContact){
        $sql = "
            INSERT INTO  
                contacts(name,email,message)
                VALUES
                    (
                        '{$arrayContact['name']}',
                        '{$arrayContact['email']}',
                        '{$arrayContact['message']}'
                    )
                  ";     
        return $this -> connection -> query($sql);
    }
}