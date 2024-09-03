<h2>Atualizar Video</h2>
<?php
$idFilme = $_POST["idFilme"];
$tituloFilme = $_POST["tituloFilme"];
$duracaoFilme = $_POST["duracaoFilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];

$sql = "update tbfilmes set 
tituloFilme='{$tituloFilme}',
duracaoFilme='{$duracaoFilme}',
valorLocacao='{$valorLocacao}',
idCategoria='{$idCategoria}' 
where idFilme = '{$idFilme}'
";

$rs = mysqli_query($conexao,$sql);

if ($rs) {
    ?>
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Atualizando registro</h4>
        <p>Registro atualizado com sucesso!</p>
        <p>Clique <a href="index.php?menu=videos" class="alert-link">aqui</a> para a lista de vídeos.</p>
    </div>
    <?php
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        <p>Erro ao editar o registro do video.</p>
    </div>
    <?php
}

?>