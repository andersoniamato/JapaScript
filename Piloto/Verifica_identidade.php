<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<form  id="RunVerifica_identidade" method=post action="RunVerifica_identidade.php" enctype= "multipart/form-data">
		<div class="row form-group">
			<div class="col-md-6">
				<label>Verificar identidade</label>
				<input type="file" name="identidade" value="" class="form-control-file">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<input type="submit" value="Submit" class="btn btn-primary">
			</div>
		</div>
	</form>
	</div>

</body>
</html>