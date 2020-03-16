<?php
require_once 'model/Disciplina.php';

class DisciplinaController
{

    public function all(){

        $obj = new Disciplina();
        $disciplinas = $obj->all();
        include "view/Disciplina_all.php";

    }

    public function read(){

        $disciplina = new Disciplina($_GET['id']);
        $disciplina->read();
        include 'view/Disciplina_read.php';

    }

    public function update(){

        $disciplina = new Disciplina($_GET['id']);

        if ( isset($_POST['sigla'])  ) {

            $disciplina->setSigla($_POST['sigla']);
            $disciplina->setNome($_POST['nome']);
            $disciplina->save();

            header("Location: ./?classe=Disciplina&acao=all");

        }

        $disciplina->update();
        include 'view/Disciplina_update.php';

    }

}