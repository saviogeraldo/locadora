<h2 class="text-center my-4">Cadastro de novo Cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post" class="container">
    <div class="form-group">
        <label for="nomeCliente">Nome do Cliente</label>
        <input type="text" name="nomeCliente" id="nomeCliente" class="form-control">
    </div>
    <div class="form-group">
        <label for="telefoneCliente">Telefone</label>
        <input type="text" name="telefoneCliente" id="telefoneCliente" class="form-control">
    </div>
    <div class="form-group">
        <label for="emailCliente">E-Mail</label>
        <input type="email" name="emailCliente" id="emailCliente" class="form-control">
    </div>
  
    <div class="text-center">
         <input type="submit" value="Salvar" class="btn btn-primary">   
    </div>
</form>
