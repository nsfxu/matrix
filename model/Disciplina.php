<?php
/**
 * Created by PhpStorm.
 * User: gerson
 * Date: 21/05/2019
 * Time: 16:12
 */

class Disciplina
{

    private $id;
    private $sigla;
    private $nome;

    private $con;

    /**
     * Disciplina constructor.
     * @param $id
     * @param $sigla
     * @param $nome
     */
    public function __construct($id=NULL, $sigla=NULL, $nome=NULL)
    {
        $this->id = $id;
        $this->sigla = $sigla;
        $this->nome = $nome;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM disciplina ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM disciplina WHERE id=?");
        $sql->execute( array($this->id) );
        $disciplina = $sql->fetchObject();

        if ( $disciplina ){
            $this->id = $disciplina->id;
            $this->sigla = $disciplina->sigla;
            $this->nome = $disciplina->nome;
        }

    }

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM disciplina WHERE id=?");
        $sql->execute( array($this->id) );
        $disciplina = $sql->fetchObject();

        if ( $disciplina ){
            $this->id = $disciplina->id;
            $this->sigla = $disciplina->sigla;
            $this->nome = $disciplina->nome;
        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE disciplina SET sigla=?, nome=? WHERE id=?");
        $sql->execute( array($this->sigla, $this->nome, $this->id) );

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
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param null $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * @return null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param null $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return "$this->id $this->sigla $this->nome <br>";
    }


}