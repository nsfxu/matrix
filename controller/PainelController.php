<?php
require_once "model/Painel.php";

class PainelController
{

    public function all(){

        $obj = new Painel();
        $paineis = $obj->all();
        include "view/Painel_all.php";

    }    

}