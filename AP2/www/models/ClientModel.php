<?php

class Clientmodel{

    public function listClients(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = 'SELECT * from clients';

        return $connection -> query($sql);
    }
}