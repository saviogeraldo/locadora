<h2 class="text-center my-4">Excluir Categoria</h2>

<?php
$idCategoria = $_GET["idCategoria"];
$sql = "DELETE FROM tbcategorias WHERE idCategoria = '{$idCategoria}'";
$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p class='alert alert-success'>Registro excluído com sucesso!</p>";
} else {
    echo "<p class='alert alert-danger'>Erro ao excluir o registro.</p>";
}
?>
