<?php

$cnpj  = $_POST['cnpj'];
$razao  = $_POST['razao'];
$fantasia  = $_POST['fantasia'];
$email  = $_POST['email'];
$nome_desenvolvedor  = $_POST['nome_desenvolvedor'];
$telefone_desenvolvedor  = $_POST['telefone_desenvolvedor'];
$linguagem_pdv  = $_POST['linguagem_pdv'];
$nome_pdv  = $_POST['nome_pdv'];
$versao_pdv  = $_POST['versao_pdv'];

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

     
$curl = '';
    
?>
