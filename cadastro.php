<?php
include("./head.php");

require_once("./banco.php")
?>
<section id="form2">
<form id="formulario2">
  <h1>Cadastrar User</h1>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
    </div>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="senha">Senha </label>
    <input type="password" class="form-control" id="senha" name="senha" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="confirma">Confirmar</label>
      <input type="password" class="form-control" id="confirma" name="confirma" required>
    </div>
   
  <div class="form-group col-md-4">
      <label for="tipo">Tipo</label>
      <select id="tipo" name="tipo" required class="form-control">
        <option selected>Escolha...</option>
        <option value="gerente">Gerente</option>
        <option value="funcionario">Funcionario</option>
      </select>
    </div>

    <input type="submit" value="Cadastro" class="btn btn-success" id="cadastro" name="cadastro">

    <div id="mensagem" class="alert alert-success" role="alert"><p></p></div>

</form>
</section>
<?php
include("./footer.php");
?>