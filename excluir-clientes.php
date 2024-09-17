<h2 class="text-center my-4">Excluir Cliente</h2>

<?php
$idCliente = $_GET["idCliente"];
$sql = "delete from tbclientes where idCliente = '{$idCliente}'";
$rs = mysqli_query($conexao, $sql);

if ($rs) {
    echo "<p class='alert alert-success'>Registro excluído com sucesso!</p>";
} else {
    echo "<p class='alert alert-danger'>Erro ao excluir o registro.</p>";
}
?>
