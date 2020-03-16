<?php include 'inc/header.php';?>

<h2>Comentario</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Descricao:</label>
        <input type="text" class="form-control" name="descricao" value="<?=$comentario->getDescricao()?>">
    </div>
    <div class="form-group">
        <label>Data:</label>
        <input type="date" class="form-control" name="data" value="<?php echo date("Y-d-m", strtotime($comentario->getData())) ?>">
    </div>

    <button type="submit">Salvar</button>

</form>
<?php include 'inc/footer.php';?>