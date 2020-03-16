<?php include 'inc/header.php';?>
<BR>
    <div class="col-lg-12"></div>
    <div class="col-lg-6">
   
    <?php     
    $id = $_GET['id'];
    $this->con = new PDO(SERVIDOR, USUARIO, SENHA);

    $sql = $this->con->prepare("SELECT * FROM comentario Where ID = :ID");
    $sql->execute(array(
          ':ID' => $id,
      ));
      if ( $sql->errorCode()=='00000'  ){
        $_SESSION['msg']="<div class='alert alert-success'>Registro apagado com sucesso</div>";
        header('Location: index.php?classe=Comentario&acao=all');
      }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
            header('Location: index.php?classe=Comentario&acao=all');
      }

      header("refresh:0;index.php?classe=Comentario&acao=all");
    ?>    

    
    
<?php include 'inc/footer.php';?>