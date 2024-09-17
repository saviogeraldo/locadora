<h2 class="text-center my-4">Inserir Cliente</h2>

<?php
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];

$sql = "INSERT INTO tbClientes (
    nomeCliente,
    telefoneCliente,
    emailCliente
    )
    VALUES(
    '$nomeCliente',
    '$telefoneCliente',
    '$emailCliente'
    )
    ";
$rs = mysqli_query($conexao, $sql);

if($rs){
    echo "<p class='alert alert-success'>Registro inserido com sucesso</p>";
}else{
    echo "<p class='alert alert-danger'>Erro ao inserir o registro</p>";
}
?>
