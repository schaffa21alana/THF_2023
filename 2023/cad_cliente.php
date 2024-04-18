<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro novos clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="cad_cliente.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </head>
   <body>
    <div class="container">
       <h3>Cadastro de novos clientes</h3>
       <hr>   <!-- Linha horizontal -->
       <br>   <!-- Quebra de linha -->
       <!--<span>Nome Completo</span> -->
       <!--<input class="form-control" type="text" name="nome" placeholder="">-->
    </div>

    <div class="container">
      <div class="row">
        <div class="col-4">
          <span class="text-danger"><b>*</b></span>
          N° CPF
          <input class="form-control" type="text" name="nome" placeholder="digite seu CPF">
        </div>

        <div class="col-8">
          <span class="text-danger"><b>*</b></span>
          Nome
          <input class="form-control" type="text" name="nome" placeholder="digite seu nome">
     </div>

     <div class="col-3">
      <span class="text-danger"><b>*</b></span>
      CEP
      <input class="form-control" type="text" name="nome" placeholder="digite eseu CEP">
 </div>

     <div class="col-4">
      <span class="text-danger"><b>*</b></span>
      Endereço
      <input class="form-control" type="text" name="nome" placeholder="Digite seu endereço">
    </div>

    <div class="col-3">
      <span class="text-danger"><b>*</b></span>
      N°
      <input class="form-control" type="text" name="nome" placeholder="N°residencial">
    </div>

    <div class="col-2">
      <span class="text-danger"><b>*</b></span>
      Complemento
      <input class="form-control" type="text" name="nome" placeholder="complemento">
    </div>

    <div class="col-4">
      <span class="text-danger"><b>*</b></span>
      Bairro
      <input class="form-control" type="text" name="nome" placeholder="bairro">
    </div>

    <div class="col-5">
      <span class="text-danger"><b>*</b></span>
      Cidade
      <input class="form-control" type="text" name="nome" placeholder="Cidade">
    </div>

    <div class="col-3">
      <span class="text-danger"><b>*</b></span>
      Estado (UF)
      <input class="form-control" type="text" name="nome" placeholder="Selecione uma opção">

      <select id="UF" name="UF">
        <option value="">Selecione</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espirito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MT">Mato Grosso</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
    </select>
    </div>

 </div>
</body>
</html>

