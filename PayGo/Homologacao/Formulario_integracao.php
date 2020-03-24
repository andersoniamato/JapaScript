<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<form  id="RunFormulario_integracao" method=post>
		<div class="row form-group">
		<div class="row form-group">
			<div class="col-md-6">
				<label>CNPJ</label>
				<input type="text" name="cnpj" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Razão social</label>
				<input type="text" name="razao" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Nome fantasia</label>
				<input type="text" name="fantasia" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>E-mail</label>
				<input type="text" name="email" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Nome do Desenvolvedor/Analista</label>
				<input type="text" name="nome_desenvolvedor" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Telefone - Móvel/Fixo</label>
				<input type="text" name="telefone_desenvolvedor" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Linguagem de programação</label>
				<input type="text" name="linguagem_pdv" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Nome do sistema de vendas</label>
				<input type="text" name="nome_pdv" value="" class="form-control">
			</div>
			<div class="col-md-6">
				<label>Versão do sistema de vendas</label>
				<input type="text" name="versao_pdv" value="" class="form-control">
			</div>

		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<input type="submit" value="Submit" class="btn btn-primary">
			</div>
		</div>
		</div>
	</form>
	</div>


<script type="text/javascript">
  $(function() {
      
      $('#RunFormulario_integracao button').on('click', function(){
        $.ajax({
        url: "RunFormulario_integracao.php",
        method: "post",
        data: $('#RunFormulario_integracao').serialize(),
        success: function(data) {

            alert('Terminal liberado com sucesso!')
          
        }
      })
      })
      
  })
</script>

</body>
</html>