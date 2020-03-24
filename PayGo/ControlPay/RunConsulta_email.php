<!DOCTYPE html>
<html>
<head>
  <title>Teste</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Pessoa/GetById?key=$key&pessoaId=$id_pessoa",

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

      echo "
      <table class='table table-bordered'>
      <thead>
        <tr>
          <th scope='col-md-6'><label>CNPJ</label></th>
          <th scope='col-md-6'><label>E-mail</label></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>".$response->pessoa->cpfCnpj."</td>
          <td>".$response->pessoa->email."</td>
        </tr>
      </tbody>
      </table>";   

      
    }

$curl = '';
    
?>
 
</body>
</html>