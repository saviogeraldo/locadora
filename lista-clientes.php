<h2>Lista de Clientes</h2>
<div>
    <a href="index.php?menu=cad-clientes">Cadastrar nova Cliente</a>
</div>
<div>
    <?php
    //$txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    if (isset($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>

    <form action="" method="post">
        <label for="txtPesquisa">Pesquisa</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">
            OK
        </button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome da Cliente</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM tbclientes 
        where nomeCliente like '%{$txtPesquisa}%'";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idCliente"] ?></td>
                <td><?= $dados["nomeCliente"] ?></td>
                <td><?= $dados["telefoneCliente"] ?></td>
                <td><?= $dados["emailCliente"] ?></td>
                <td><a href="index.php?menu=editar-clientes&idCliente=<?=$dados["idCliente"]?>">Editar</a></td>
                <td><a href="index.php?menu=excluir-clientes&idCliente=<?=$dados["idCliente"]?>">excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>