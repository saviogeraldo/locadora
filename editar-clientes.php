<h2 class="text-center my-4">Editar Cliente</h2>

<?php
$idCliente = $_GET["idCliente"];
$sql = "SELECT * FROM tbclientes WHERE idCliente = '{$idCliente}'";
$rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<form action="index.php?menu=atualizar-clientes" method="post" class="container">
    <div class="form-group">
        <label for="idCliente">ID</label>
        <input type="text" name="idCliente" id="idCliente" value="<?=$dados["idCliente"]?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="nomeCliente">Nome do Cliente</label>
        <input type="text" name="nomeCliente" id="nomeCliente" value="<?=$dados["nomeCliente"]?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="telefoneCliente">Telefone</label>
        <input type="text" name="telefoneCliente" id="telefoneCliente" value="<?=$dados["telefoneCliente"]?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="emailCliente">E-Mail</label>
        <input type="email" name="emailCliente" id="emailCliente" value="<?=$dados["emailCliente"]?>" class="form-control">
    </div>
  
    <div class="text-center">
         <input type="submit" value="Salvar" class="btn btn-primary">   
    </div>
</form>
