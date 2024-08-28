<div class="container">
    <h2 class="bi bi-film"><i class="bi bi-plus"></i> Cadastro de Videos</h2>

    <?php
    $tituloFilme = $_POST["tituloFilme"];
    $duracaoFilme = $_POST["duracaoFilme"];
    $valorLocacao = $_POST["valorLocacao"];
    $idCategoria = $_POST["idCategoria"];

    $sql = "INSERT INTO tbfilmes (
    tituloFilme,
    duracaoFilme,
    valorLocacao,
    idCategoria
    )
    VALUES(
    '$tituloFilme',
    '$duracaoFilme',
    '$valorLocacao',
    '$idCategoria'
    )
    ";
    $rs = mysqli_query($conexao, $sql);

    if ($rs) {
        ?>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Adicionando novo registro</h4>
            <p>Registro inserido com sucesso!</p>
            <p>Clique <a href="index.php?menu=videos" class="alert-link">aqui</a> para a lista de vídeos.</p>
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            <p>Erro ao inserir um novo registro.</p>
        </div>
        <?php
    }
    ?>
</div>