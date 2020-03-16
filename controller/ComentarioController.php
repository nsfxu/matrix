<?php
require_once 'model/Comentario.php';

class ComentarioController
{

    public function all(){

        $obj = new Comentario();
        $comentarios = $obj->all();
        include "view/Comentario_all.php";

    }

    public function read(){

        $comentario = new Comentario($_GET['id']);
        $comentario->read();
        include 'view/Comentario_read.php';

    }

    public function delete(){

        $comentario = new Comentario($_GET['id']);
        $comentario->delete();
        include 'view/Comentario_delete.php';

    }

    public function update(){

        $comentario = new Comentario($_GET['id']);

        if ( isset($_POST['descricao'])  ) {

            $comentario->setDescricao($_POST['descricao']);
            $comentario->setData($_POST['data']);
            $comentario->save();

            header("Location: ./?classe=Comentario&acao=all");

        }

        $comentario->update();
        include 'view/Comentario_update.php';

    }

    public function create(){

        include 'view/Comentario_create.php';
    }

}