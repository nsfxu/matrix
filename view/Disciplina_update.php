<?php include 'inc/header.php';?>

    <h2>Disciplina</h2>

<form action="" method="post">

        <div class="form-group">
            <label>Sigla:</label>
            <input type="text" class="form-control" name="sigla" value="<?=$disciplina->getSigla()?>">
        </div>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?=$disciplina->getNome()?>">
        </div>


        <button type="submit">Salvar</button>

</form>
<?php include 'inc/footer.php';?>

