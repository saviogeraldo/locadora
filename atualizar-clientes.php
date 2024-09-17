<h2 class="text-center my-4">Atualizar Cliente</h2>

<?php
$idCliente = $_POST["idCliente"];
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];

$sql = "update tbClientes set 
nomeCliente='{$nomeCliente}',
telefoneCliente='{$telefoneCliente}',
emailCliente='{$emailCliente}'

where idCliente = '{$idCliente}'
";

$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p class='alert alert-success'>Registro atualizado com sucesso!</p>";
}else{
    echo "<p class='alert alert-danger'>Erro ao atualizar o registro.</p>";
}
?>
