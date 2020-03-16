<?php include 'inc/header.php';?>

    <h2>Disciplina</h2>

        <div class="form-group">
            <label>Sigla:</label>
            <input type="text" class="form-control" name="sigla" disabled value="<?=$disciplina->getSigla()?>">
        </div>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" disabled value="<?=$disciplina->getNome()?>">
        </div>

<?php include 'inc/footer.php';?>

