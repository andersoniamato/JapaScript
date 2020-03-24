<?php  

//atribui a URL da API para a variável $url
$url = "https://api.gate2all.com.br/v1/transactions?referenceId=1187472.json";

//atribui que a requisição será POST
$tpRequisicao = 'GET';

//atribui um array com as informações do header na variável $cabecalho
$cabecalho = array(
 '"Content-Type: application/json",
  "authenticationApi: forja_tauros",
  "authenticationKey: 6D5792B7B43514DF2E73"'
 );

//atribui o conteúdo que deve ser enviado no Body na variável $conteudo
$conteudo = '';

//declara a classe Comunicação
$Comunicacao = new Comunicacao;

//chama a função chamaAPI, passando os parâmetros
$resposta = $Comunicacao->chamaAPI($cabecalho, $url, $tpRequisicao);

//mostra resposta da função na tela
echo "$resposta";

class Comunicacao {
	public function chamaAPI($cabecalho = array(), $url, $tpRequisicao) {

		//inicia a conexão com a URL
		$ch = curl_init($url);

		//define que o metodo de comunicação será POST
		curl_setopt($ch, CURLOPT_HTTPGET, true);

		//envia o header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);

		//atribui a resposta da API na variável $resposta
		$resposta = curl_exec($ch);

		//informa que o retorno será texto
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//retorna conteudo da resposta
		return $resposta;

	}
}

?>

