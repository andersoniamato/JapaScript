<?php

$cpfCnpj  = $_POST['cpfCnpj'];
$senha  = $_POST['senha'];
$curl = curl_init();

$curl_setopt_array = curl_setopt_array($curl, array(

  //atribui a URL da API para a variável $url
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Login/Login/",

  //informa que o retorno será texto
  CURLOPT_RETURNTRANSFER => true,

  //define que o metodo de requisição será POST
  CURLOPT_CUSTOMREQUEST => "POST",

  //atribui o conteúdo que deve ser enviado no Body
  CURLOPT_POSTFIELDS => "
  {\"cpfCnpj\": \"$cpfCnpj\",
   \"senha\": \"$senha\"
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
      echo $response->pessoa->key;
      $key = $response->pessoa->key;
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teste</title>
</head>
<body>

  <form action="Terminais_fisicos.php" method="get"> <input type="submit" value="ControlPay Consulta terminais físicos"/></form>

</body>
</html>