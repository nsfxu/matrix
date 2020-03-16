<?php

class Painel
{

    private $id;
    private $nome;
    private $url;
    private $ordem;

    private $con;

    /**
     * Painel constructor.
     * @param $id
     * @param $nome
     * @param $url
     * @param $ordem
     */
    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM painel ORDER BY ordem");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM `matrix`.`disciplina` WHERE `id` = ");
        $sql->execute( array($this->id) );
        $disciplina = $sql->fetchObject();

        if ( $disciplina ){
            $this->id = $disciplina->id;
            $this->sigla = $disciplina->sigla;
            $this->nome = $disciplina->nome;
        }

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * @param mixed $ordem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
    }

    public function __toString()
    {
        return "$this->id - $this->nome  - $this->url - $this->ordem";
    }
}