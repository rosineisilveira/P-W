<?php

class SiteController{

    public function home(){
        include('views/templates/header.php');
        include('views/site/home.php');
        include('views/templates/footer.php');
    }

    public function about(){
        include('views/templates/header.php');
        include('views/site/about.php');
        include('views/templates/footer.php');
    }
    public function produtos (){
        include('views/templates/header.php');
        include('views/site/produtos.php');
        include('views/templates/footer.php');
    }
    public function contatos(){
        include('views/templates/header.php');
        include('views/site/contatos.php');
        include('views/templates/footer.php');
    }
}