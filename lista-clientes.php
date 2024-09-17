<h2 class="text-center my-4">Lista de Clientes</h2>

<div class="text-center mb-3">
    <a href="index.php?menu=cad-clientes" class="btn btn-primary">Cadastrar novo Cliente</a>
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
            <th>Nome do Cliente</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbclientes WHERE nomeCliente like '%{$txtPesquisa}%'";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idCliente"] ?></td>
                <td><?= $dados["nomeCliente"] ?></td>
                <td><?= $dados["telefoneCliente"] ?></td>
                <td><?= $dados["emailCliente"] ?></td>
                <td><a href="index.php?menu=editar-clientes&idCliente=<?=$dados["idCliente"]?>" class="btn btn-warning">Editar</a></td>
                <td><a href="index.php?menu=excluir-clientes&idCliente=<?=$dados["idCliente"]?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
