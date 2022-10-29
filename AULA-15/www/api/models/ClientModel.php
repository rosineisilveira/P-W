<?php

class ClientModel{

    var $connection;

    public function __construct(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $this -> connection = $connectClass -> getConn();
    }

    public function listClients(){
        $sql = "SELECT * from clients";
        return $this -> connection -> query($sql);
        
    }

    public function consultClient($idClient){
        $sql = "
                SELECT * from clients
                where
                   idClient = $idClient
                  ";             
        return $this -> connection -> query($sql);
    }

    public function insertClient($arrayClient){
        $sql = "
            INSERT INTO  
                clients(name,email,phone,address)
                VALUES
                    (
                        '{$arrayClient['name']}',
                        '{$arrayClient['email']}',
                        '{$arrayClient['phone']}',
                        '{$arrayClient['address']}'
                    )
                  ";     
        return $this -> connection -> query($sql);
    }

    public function updateClient($arrayClient){
        $sql = "
            UPDATE clients
                SET
                    name    = '{$arrayClient['name']}',
                    email   = '{$arrayClient['email']}',
                    phone   = '{$arrayClient['phone']}',
                    address = '{$arrayClient['address']}'
                WHERE
                    idClient = {$arrayClient['idClient']}      
            ";    
        return $this -> connection -> query($sql);
    }

    public function deleteClient($idClient){
        $sql = "
            DELETE FROM clients
            WHERE
                idClient = {$idClient}     
            ";                
        return $this -> connection -> query($sql);
    }
}