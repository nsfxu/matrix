<?php include 'inc/header.php';?>
    <a class="btn btn-primary" href="?classe=Disciplina&acao=create" style="float: right">Nova</a>
    <br>
<br>

    <table class="table">
        <thead>
        <tr>
            <th>Sigla</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplinas as $disciplina){ ?>
                <tr title="<?=$disciplina->id?>">
                    <td><?=$disciplina->sigla?></td>
                    <td><?=$disciplina->nome?></td>
                    <td>
                        <a class="btn btn-primary" href="?classe=Disciplina&acao=read&id=<?=$disciplina->id?>">Ver</a>
                        <a class="btn btn-primary" href="?classe=Disciplina&acao=update&id=<?=$disciplina->id?>">Alterar</a>
                        <a class="btn btn-primary" href="?classe=Disciplina&acao=delete&id=<?=$disciplina->id?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

<?php include 'inc/footer.php';?>
