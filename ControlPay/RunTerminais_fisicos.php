<?php

$cpfCnpj  = $_POST['cpfCnpj'];
$key  = "vAj7G3xtPMaIUKborj%2fmcS2U5gERp6MX43fQgmSKH2KP0CQCCU8%2bHfrrzdLmeQ92jh40T5I9qrEbgBMhrkbY2P3mENZR6hJDty3Gu9ONM%2b0%3d";
$curl = curl_init();

$curl_setopt_array = curl_setopt_array($curl, array(

  //atribui a URL da API para a variável $url
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Pessoa/GetByNomeCpfCnpj?key=$key&nome=$cpfCnpj",

  //informa que o retorno será texto
  CURLOPT_RETURNTRANSFER => true,

  //define que o metodo de requisição será POST
  CURLOPT_CUSTOMREQUEST => "POST",

  //atribui o conteúdo que deve ser enviado no Body
  CURLOPT_POSTFIELDS => "
  {}",

  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response = json_decode($response);

      $id_pessoa = $response->pessoas[0]->id;
    }

$curl = '';

$curl = curl_init();

$curl_setopt_array = curl_setopt_array($curl, array(

  //atribui a URL da API para a variável $url
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Terminal/GetByPessoaId?key=$key",

  //informa que o retorno será texto
  CURLOPT_RETURNTRANSFER => true,

  //define que o metodo de requisição será POST
  CURLOPT_CUSTOMREQUEST => "POST",

  //atribui o conteúdo que deve ser enviado no Body
  CURLOPT_POSTFIELDS => "
  {\"pessoaVendedorId\": \"$id_pessoa\"
   }",

  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response = json_decode($response);

      echo "
      <table class='table table-bordered'>
        <tr>
          <td>Id terminal</td>
          <td>Nome</td>
          <td>Liberar terminal</td>
          <td>Enviar transação</td>
        </tr>";
      foreach ($response->terminais as $terminal) {

        echo "
        <tr>
          <td>".$terminal->id."</td>
          <td>".$terminal->nome."</td>
          <td>";?>
            <form method= "POST" id="zeraTerminal.php" >
              <input type= "hidden" id= "zeraId" value="<?php echo $terminal->terminalFisico->id; ?>" name="zeraId">
              <input type= "hidden" id= "zeraPessoaId" value="<?php echo $id_pessoa; ?>" name= "zeraPessoaId">
              <input type= "hidden" id= "key" value="<?php echo $key; ?>"name= "zeraKey">
              <button type="submit" class="btn btn-primary">Liberar terminal</button>
            </form>
          </td>
          <td>
            <form method="POST" id="enviaTransacao.php">
              <input type= "hidden" id= "transacaoId" value="<?php echo $terminal->id; ?>"name="transacaoId">
              <input type= "hidden" id= "transacaoPessoaId" value="<?php echo $id_pessoa; ?>"name= "transacaoPessoaId">
              <input type= "hidden" id= "transacaoKeyAdm" value="<?php echo $key; ?>"name= "transacaoKeyAdm">
              <button type="submit" class="btn btn-primary">Enviar transação teste</button>
            </form>
            <?php
            echo "
          </td>
        </tr>";   

      }
      echo "</table>";
    }

$curl = '';
    
?>
