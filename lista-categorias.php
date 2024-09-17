<h2 class="text-center my-4">Lista de Categorias</h2>

<div class="text-center mb-3">
    <a href="index.php?menu=cad-categorias" class="btn btn-primary">Cadastrar nova Categoria</a>
</div>

<div class="mb-4">
    <?php
    if (isset($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>

    <form action="" method="post" class="form-inline">
        <div class="form-group">
            <label for="txtPesquisa" class="mr-2">Pesquisa</label>
            <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>" class="form-control mr-2">
            <button type="submit" class="btn btn-success">OK</button>
        </div>
    </form>
</div>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>Nome da Categoria</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbcategorias WHERE nomeCategoria like '%{$txtPesquisa}%'";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idCategoria"] ?></td>
                <td><?= $dados["nomeCategoria"] ?></td>
                <td><a href="index.php?menu=editar-categorias&idCategoria=<?=$dados["idCategoria"]?>" class="btn btn-warning">Editar</a></td>
                <td><a href="index.php?menu=excluir-categorias&idCategoria=<?=$dados["idCategoria"]?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
