<?php

	$transacaoId           = $_POST['transacaoId'];
    $transacaoPessoaId     = $_POST['transacaoPessoaId'];
    $transacaoKeyAdm     = $_POST['transacaoKeyAdm'];
    


        $curl = curl_init();

        $curl_setopt_array = curl_setopt_array($curl, array(

          //atribui a URL da API para a variável $url
          CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/TokenAuthentication/GetByAtivosByPessoaId?key=$transacaoKeyAdm&pessoaId=$transacaoPessoaId",

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

            $keyCliente = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              $keyCliente = json_decode($keyCliente);
$curl = '';


    $tokenCliente         = $keyCliente->tokensAuthentications[0]->token;


$curl = curl_init();

$curl_setopt_array = curl_setopt_array($curl, array(

  //atribui a URL da API para a variável $url
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Venda/Vender/?key=$tokenCliente",

  //informa que o retorno será texto
  CURLOPT_RETURNTRANSFER => true,

  //define que o metodo de requisição será POST
  CURLOPT_CUSTOMREQUEST => "POST",

  //atribui o conteúdo que deve ser enviado no Body
  CURLOPT_POSTFIELDS => "
  {\"formaPagamentoId\": 21,
    \"terminalId\": \"$transacaoId\",
    \"referencia\": null,
    \"aguardarTefIniciarTransacao\": true,
    \"parcelamentoAdmin\": null,
    \"quantidadeParcelas\": 1,
    \"valorTotalVendido\": \"0,02\"
    }",

  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return json_encode(array("status" => 0, 'mensagem' => $err));
      //echo "cURL Error #:" . $err;
    } else {
      
      //echo "<meta http-equiv= 'refresh' content='0, url= RunTerminais_fisicos.php'>";
      return json_encode(array("status" => 1, 'mensagem' => 'Terminal liberado com sucesso!'));
      //echo "Terminal liberado com sucesso!";

      }
      $curl = '';
    }

?>

