<?php

class UserModel{
    public function consultUser($userName){
        
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass -> openConnect();
        $connection = $ConnectClass -> getConn();

        $sql = "SELECT * from users 
                WHERE 
                user  = '$userName'
        ";

        return $connection -> query($sql);
    }
    
        
}