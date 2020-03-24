<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<form  action="RunConsulta_email.php" method=post>
		<div class="row form-group">
		<div class="row form-group">
			<div class="col-md-6">
				<label>CPF ou CNPJ</label>
				<input type="text" name="cpfCnpj" value="" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<input type="submit" value="Submit" class="btn btn-primary">
			</div>
		</div>
		</div>
	</form>
	<form  action="RunConsulta_email_all.php" method=post>
		<div class="row form-group">
		<div class="row form-group">
			<div class="col-md-6">
				<label>Consultar todos</label>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<input type="submit" value="Consultar tudo" class="btn btn-primary">
			</div>
		</div>
		</div>
	</form>
	</div>

</body>
</html>