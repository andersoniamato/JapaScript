<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<form  id="RunCrusador" method=post action="RunCrusador.php" enctype= "multipart/form-data">
		<div class="row form-group">
		<div class="row form-group">
			<div class="col-md-6">
				<label>CGR</label>
				<input type="file" name="CGR" value="" class="form-control-file">
			</div>
			<div class="col-md-6">
				<label>PGW</label>
				<input type="file" name="PGW" value="" class="form-control-file">
			</div>
			<div class="col-md-6">
				<label>2.0</label>
				<input type="file" name="2.0" value="" class="form-control-file">
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




</body>
</html>