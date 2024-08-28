<div class="container">
    <h3 class="sbi bi-film"> Lista de Vídeos</h3>
    <div class="mb-3">
        <a class="btn btn-secondary" href="index.php?menu=cad-videos">Cadastrar novo vídeo</a>
    </div>
    <div class="mb-3">
        <?php
        //$txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
        if (isset($_POST["txtPesquisa"])) {
            $txtPesquisa = $_POST["txtPesquisa"];
        } else {
            $txtPesquisa = "";
        }
        ?>
        <form action="" method="post">
            <div class="input-group">
                <div class="input-group-text">Pesquisar</div>
                <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa"
                    value="<?= $txtPesquisa ?>">
                <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <div class="border p-1 rounded bg-dark">
        <table class="table table-dark table-striped table-hover">
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
                        <td>
                            <a class="btn btn-outline-warning"
                                href="index.php?menu=editar-videos&idFilme=<?= $dados["idFilme"] ?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-danger"
                                href="index.php?menu=excluir-videos&idFilme=<?= $dados["idFilme"] ?>">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>