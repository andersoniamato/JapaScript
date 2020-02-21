<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php
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
						$valor = $cell->nodeValue;
					}
					if ($cell_index == 1){
						if ($cell->nodeValue == 'teste') {
							echo $valor ."<br>";
						}
					}
					$cell_index = $cell_index +1;
				}
			}
			$row_cont = $row_cont +1;
		}
		$row_cont = 0;
	}
?>

</body>
</html>