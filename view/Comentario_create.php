<?php
if(isset($_GET['descricao']) && isset($_GET['data'])) {

    $con;
    $this->con = new PDO(SERVIDOR, USUARIO, SENHA);

    $descricao = $_GET['descricao'];
    $data = $_GET['data'];

    $sql = $this->con->prepare("INSERT INTO comentario (id, descricao, data) VALUES (NULL, :descricao, :data)");
    $sql->execute(array(
          ':descricao' => $descricao,
          ':data' => $data,
      ));
      if ( $sql->errorCode()=='00000'  ){
        $_SESSION['msg']="<div class='alert alert-success'>Registro alterado</div>";
        header('Location: index.php?classe=Comentario&acao=all');
      }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
            header('Location: index.php?classe=Comentario&acao=all');
      } 
}

?>
<?php include 'inc/header.php';?>

<h2>Comentario</h2>

<form action="" method="get">
    <input type="hidden" class="form-control" name="classe" value="Comentario">
    <input type="hidden" class="form-control" name="acao" value="create">
    <div class="form-group">
        <label>Descricao:</label>
        <input type="text" class="form-control" name="descricao">
    </div>
    <div class="form-group">
        <label>Data:</label>
        <input type="date" class="form-control" name="data">
    </div>

    <button type="submit">Enviar</button>

</form>
<?php include 'inc/footer.php';?>