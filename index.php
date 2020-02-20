<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Teste</title>
</head>
<body>

<div class="container">
	<div class="row form-group">
		<div class="col-md-6">
			<form action="ControlPay/Terminais_fisicos.php" method="get"> <input type="submit" value="ControlPay Consulta terminais físicos"  class="btn btn-primary"/></form><br>
		</div>
		<div class="col-md-6">
			<form action="ControlPay/Consulta_email.php" method="get"> <input type="submit" value="ControlPay Consulta e-mail"  class="btn btn-primary"/></form><br>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<form action="Gateway/Consulta.php" method="get"> <input type="submit" value="Gateway Consulta" class="btn btn-primary"/></form><br>
		</div>
	</div>
</div>

</body>
</html>