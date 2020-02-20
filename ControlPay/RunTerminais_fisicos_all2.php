<!DOCTYPE html>
<html>
<head>
  <title>Teste</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php


set_time_limit(7200);

$key  = "vAj7G3xtPMaIUKborj%2fmcS2U5gERp6MX43fQgmSKH2KP0CQCCU8%2bHfrrzdLmeQ92jh40T5I9qrEbgBMhrkbY2P3mENZR6hJDty3Gu9ONM%2b0%3d";
$curl = curl_init();

$curl_setopt_array = curl_setopt_array($curl, array(

  //atribui a URL da API para a variável $url
  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Pessoa/GetAll?key=$key",

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
    $curl = '';

    if ($err) {
      echo "cURL Error #:" . $err;
    } 
    else 
    {
      	$response = json_decode($response);

      	echo "
              <table>
                <tr>
                  <td>CNPJ</td>
                  <td>id_terminal_fisico</td>
                </tr>";     














				$curl = curl_init();

				$curl_setopt_array = curl_setopt_array($curl, array(

				  //atribui a URL da API para a variável $url
				  CURLOPT_URL => "http://ControlPay.ntk.com.br/webapi/Terminal/GetByPessoaId?key=$key&pessoaId=9",

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

				    $response1 = curl_exec($curl);
				    $err = curl_error($curl);

				    $response1 = json_decode($response1);

				    curl_close($curl);
				    $curl = '';

				    if ($err) {
				      echo "cURL Error #:" . $err;
				    } 
				    else
				    {
				    	$teste = $response1->terminais[0]->terminalFisico->id;
				    	echo $teste;
				    	foreach ($response1->terminais as $terminal)
				    	{
				    		

				    		if ($terminal->terminalFisico->id != null) 
				    		{
				    			echo "<tr>
				                	<td>".$terminal->terminalFisico->id."</td>
				                
				                            
				              	  </tr>";
				    		}

		

				    	}

				  
				    }



















      	foreach ($response->pessoas as $pessoa)
      	{

        	$id_pessoa = $pessoa->id;

        	$cpf_cnpj = $pessoa->cpfCnpj;







				








        	echo "<tr>
                	<td>".$cpf_cnpj."</td>
                
                            
              	  </tr>";
        }
        echo "</table>";
    }



?>
 
</body>
</html>