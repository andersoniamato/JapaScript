<?php

	  $zeraId           = $_POST['zeraId'];
    $zeraPessoaId     = $_POST['zeraPessoaId'];
    //$zeraNome         = $_POST['zeraNome'];
    //$zeraPontoCaptura = $_POST['zeraPontoCaptura'];
    //$zeraAmbientePgw  = $_POST['zeraAmbientePgw'];
    //$zeraUsaPinPad    = $_POST['zeraUsaPinPad'];
    $zeraKey          = $_POST['zeraKey'];

    $zeraStatus = 5;
    $zeraObs = "Liberando terminal";




        $curl = curl_init();

        $curl_setopt_array = curl_setopt_array($curl, array(

          //atribui a URL da API para a variável $url
          CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/TerminalFisico/GetById?key=$zeraKey&terminalFisicoId=$zeraId",

          //informa que o retorno será texto
          CURLOPT_RETURNTRANSFER => true,

          //define que o metodo de requisição será POST
          CURLOPT_CUSTOMREQUEST => "POST",

          //atribui o conteúdo que deve ser enviado no Body
          CURLOPT_POSTFIELDS => "
          {\"pessoaVendedorId\": \"$zeraId\"
           }",

          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));

            $terminalFisico1 = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              $terminalFisico1 = json_decode($terminalFisico1);
$curl = '';


    $zeraNome         = $terminalFisico1->terminalFisico->nome;
    $zeraPontoCaptura = $terminalFisico1->terminalFisico->pontoCaptura;
    $zeraAmbientePgw  = $terminalFisico1->terminalFisico->ambientePGW;
    $zeraUsaPinPad    = $terminalFisico1->terminalFisico->usaPinPad;



$curl = curl_init();

$curl_setopt_array = curl_setopt_array($curl, array(

  //atribui a URL da API para a variável $url
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/TerminalFisico/Insert?key=$zeraKey",

  //informa que o retorno será texto
  CURLOPT_RETURNTRANSFER => true,

  //define que o metodo de requisição será POST
  CURLOPT_CUSTOMREQUEST => "POST",

  //atribui o conteúdo que deve ser enviado no Body
  CURLOPT_POSTFIELDS => "
  {
    \"id\": \"$zeraId\",
    \"pessoaId\": \"$zeraPessoaId\",
    \"nome\": \"$zeraNome\",
    \"pontoCaptura\": \"$zeraPontoCaptura\",
    \"ambientePgw\": \"$zeraAmbientePgw\",
    \"usaPinPad\": $zeraUsaPinPad,
    \"status\": \"$zeraStatus\",
    \"obs\":\"$zeraObs\"
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
      return json_encode(array("status" => 1, 'mensagem' => $zeraNome));
      //echo "Terminal liberado com sucesso!";

      }
      $curl = '';
    }

?>

