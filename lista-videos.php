<h2>Lista de Vídeos</h2>
<div>
    <a href="index.php?menu=cad-videos">Cadastrar novo vídeo</a>
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
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">Ok</button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Duração do Filme</th>
            <th>Valor da Locação</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM 
        tbfilmes as f inner join 
        tbCategorias as c on f.idCategoria = c.idCategoria 
        where tituloFilme like '%{$txtPesquisa}%' 
         order by tituloFilme";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idFilme"] ?></td>
                <td><?= $dados["tituloFilme"] ?></td>
                <td><?= $dados["duracaoFilme"] ?></td>
                <td><?= $dados["valorLocacao"] ?></td>
                <td><?= $dados["nomeCategoria"] ?></td>
                <td><a href="index.php?menu=editar-videos&idFilme=<?=$dados["idFilme"]?>">Editar</a></td>
                <td><a href="index.php?menu=excluir-videos&idFilme=<?=$dados["idFilme"]?>">Excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>