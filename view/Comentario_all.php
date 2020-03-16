<?php include 'inc/header.php';?>

<?php
// se tiver uma mensagem, mostra e em seguida apaga
if ( isset($_SESSION['msg']) ){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<a class="btn btn-primary" href="?classe=Comentario&acao=create" style="float: right">Nova</a>
<br>
<br>

<table class="table">
    <thead>
    <tr>
        <th>Descrição</th>
        <th>Data</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($comentarios as $comentario){ ?>
        <tr title="<?=$comentario->id?>">
            <td><?=$comentario->descricao?></td>
            <td><?=$comentario->data?></td>
            <td>
                <a class="btn btn-primary" href="?classe=Comentario&acao=read&id=<?=$comentario->id?>"><i class="fa fa-search"></i> Ver</a>
                <a class="btn btn-primary" href="?classe=Comentario&acao=update&id=<?=$comentario->id?>"><i class="fa fa-edit"></i> Alterar</a>
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="<?=$comentario->id?>">
                    <i class="fa fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

<?php include 'inc/footer.php';?>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Excluir</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Você tem certeza que deseja excluir o registro?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a id="btn-excluir" class="btn btn-primary" href="">Sim</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
            </div>

        </div>
    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $("#btn-excluir").attr('href','?classe=Comentario&acao=delete&id='+id);

    });
</script>