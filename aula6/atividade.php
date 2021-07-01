  <!DOCTYPE html>
  <html lang="en">
  <head>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="css/bootstrap.min.js"></script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Atividade usando bootstrap</title>
  </head>
  <body class="container">
  <form method="post" action="#" class="container">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="endereço">Endereço:</label>
      <input type="text" name="cep" class="form-control" id="cep" placeholder="Exemplo: Rua...,Nº...,Porto...,">
    </div>
    <div class="form-group col-md-6">
      <label for="email">EMAIL:</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Digite seu email de contato">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="fone">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone de contato">
      </div>
      <div class="form-group col-md-4">
        <label for="sexo">Sexo:</label>
        <select id="sexo" placeholder="Genero" class="form-control">
          <option>Masculino</option>
          <option>Feminino</option>
          <option>Outros</option>
        </select>
      </div>
    </div>
    <div class="form-row">
          <div class="form-group col-md-12">
            <label for="desc">Descreva o lugar</label>
            <textarea rows="6" class="form-control" id="desc" name="desc"></textarea>
          </div>
          </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <?php
  if($_POST){
  $n = $_POST['nome'];
  $t = $_POST['telefone'];
  $e = $_POST['cep'];
  $m = $_POST['email'];

      echo "Obrigado por realizar nosso formulario <b>$n,</b> Iremos entrar em contato pelo seu email: $m ou pelo: $t.";
      echo " Seu pedido sera enviado para o endereço: $e.";
  }
  ?>
  </body>
  </html>
