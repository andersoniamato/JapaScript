<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php

echo "
      <table class='table table-bordered'>
      <thead>
        <tr>
          <th scope='col-md-6'><label>CNPJ</label></th>
          <th scope='col-md-6'><label>E-mail</label></th>
        </tr>
      </thead>
      <tbody>";

if(!empty($_FILES['identidade']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo-> load($_FILES['identidade']['tmp_name']);
		$rows = $arquivo->getElementsByTagName( 'Row' );
		$row_cont = 0;
		foreach ($rows as $row) {
			$cells = $row->getElementsByTagName( 'Cell' );
			if ($row_cont != 0) {
				$cell_index = 1;
				foreach ($cells as $cell) {
					$ind = $cell->getAttribute( 'ss:Index' );
					if ($ind != null) {
						$cell_index = $ind;
					}
					if ($cell_index == 1) {
						$cpfCnpj = $cell->nodeValue;
					}

					$curl = curl_init();

					$curl_setopt_array = curl_setopt_array($curl, array(

					  //atribui a URL da API para a variável $url
					  CURLOPT_URL => "https://api.ntkonline.com.br/v0.1/SubPessoaParceiroSubadquirente/listarPorCnpjCpf",

					  //informa que o retorno será texto
					  CURLOPT_RETURNTRANSFER => true,

					  //define que o metodo de requisição será POST
					  CURLOPT_CUSTOMREQUEST => "POST",

					  //atribui o conteúdo que deve ser enviado no Body
					  CURLOPT_POSTFIELDS => "
					  {\n    \"CNPJ_CPF\": \"$cpfCnpj\"\n}",

					  CURLOPT_HTTPHEADER => array(
					    "Content-Type: application/json",
					    'Authorization: Basic '. base64_encode("anderson.iamaton2:seiji03160506")
					  ),
					));

					    $response = curl_exec($curl);
					    $err = curl_error($curl);

					    curl_close($curl);

					    if ($err) {
					      echo "cURL Error #:" . $err;
					    } else {
					      $response = json_decode($response);

					      $keyCount = 0;

					      foreach ($response->PessoaParceiroSubadquirentes as $key) {
					        $keyCount++;
					      }

					      if ($keyCount > 1)
					      {
					        $marketplace = "Mais de um";
					      }
					      else
					      {
					        $marketplace = $response->PessoaParceiroSubadquirentes[0]->Marketplace->Nome;
					      }

					      echo "
					        <tr>
					          <td>".$cpfCnpj."</td>
					          <td>".$marketplace."</td>
					        </tr>";
					       
					    }


					$curl = '';

					$cell_index = $cell_index +1;
				}
			}
			$row_cont = $row_cont +1;
		}
		$row_cont = 0;
	}

echo "</tbody>
      </table>";

?>

</body>
</html>