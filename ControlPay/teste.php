<!DOCTYPE html>
<html>
<head>
  <title>Teste</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

$key  = "vAj7G3xtPMaIUKborj%2fmcS2U5gERp6MX43fQgmSKH2KP0CQCCU8%2bHfrrzdLmeQ92jh40T5I9qrEbgBMhrkbY2P3mENZR6hJDty3Gu9ONM%2b0%3d";

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
  {\"pessoaVendedorId\": \"9\"
   }",

  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    $response = json_decode($response);

    curl_close($curl);
    $curl = '';

    if ($err) {
      echo "cURL Error #:" . $err;
    } 
    else
    {
    	echo $response->terminais[0]->terminalFisico->id;
    }
    



?>
 
</body>
</html>