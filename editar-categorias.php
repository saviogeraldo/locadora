<h2 class="text-center my-4">Editar Categoria</h2>

<?php
$idCategoria = $_GET["idCategoria"];
$sql = "SELECT * FROM tbcategorias WHERE idCategoria = '{$idCategoria}'";
$rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<form action="index.php?menu=atualizar-categorias" method="post" class="container">
    <div class="form-group">
        <label for="idCategoria">ID</label>
        <input type="text" name="idCategoria" id="idCategoria" value="<?=$dados["idCategoria"]?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="nomeCategoria">Nome da Categoria</label>
        <input type="text" name="nomeCategoria" id="nomeCategoria" value="<?=$dados["nomeCategoria"]?>" class="form-control">
    </div>
  
    <div class="text-center">
         <input type="submit" value="Salvar" class="btn btn-primary">   
    </div>
</form>
