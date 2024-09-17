<h2 class="text-center my-4">Atualizar Categoria</h2>

<?php
$idCategoria = $_POST["idCategoria"];
$nomeCategoria = $_POST["nomeCategoria"];

$sql = "UPDATE tbcategorias SET nomeCategoria='{$nomeCategoria}' WHERE idCategoria = '{$idCategoria}'";
$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p class='alert alert-success'>Registro atualizado com sucesso!</p>";
} else {
    echo "<p class='alert alert-danger'>Erro ao atualizar o registro.</p>";
}
?>
