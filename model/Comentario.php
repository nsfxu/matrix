<?php
/**
 * Created by PhpStorm.
 * User: gerson
 * Date: 21/05/2019
 * Time: 16:12
 */

class Comentario
{

    private $id;
    private $descricao;
    private $data;

    private $con;

    /**
     * Comentario constructor.
     * @param $id
     * @param $descricao
     * @param $data
     */
    public function __construct($id=NULL, $descricao=NULL, $data=NULL)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->data = $data;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM comentario");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function delete(){
        $sql= $this->con->prepare("DELETE FROM comentario WHERE id=?");
        $sql->execute( array($this->id) );
        $turma = $sql->fetchObject();
    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM comentario WHERE id=?");
        $sql->execute( array($this->id) );
        $comentario = $sql->fetchObject();

        if ( $comentario ){
            $this->id = $comentario->id;
            $this->descricao = $comentario->descricao;
            $this->data = $comentario->data;
        }

    }   

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM comentario WHERE id=?");
        $sql->execute( array($this->id) );
        $comentario = $sql->fetchObject();

        if ( $comentario ){
            $this->id = $comentario->id;
            $this->descricao = $comentario->descricao;
            $this->data = $comentario->data;
        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE comentario SET descricao=?, data=? WHERE id=?");
        $sql->execute( array($this->descricao, $this->data, $this->id) );

        if ( $sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }
    
    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param null $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param null $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function __toString()
    {
        return "$this->id $this->descricao $this->data <br>";
    }


}