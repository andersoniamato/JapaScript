<?php
if(!empty($_FILES['pdc']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo-> load($_FILES['pdc']['tmp_name']);
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
					if ($cell_index == 2) {
						$valor = $cell->nodeValue;
						echo $valor ."<br>";
					}
					
					$cell_index = $cell_index +1;
				}
			}
			$row_cont = $row_cont +1;
		}
		$row_cont = 0;
	}
	else
	{
		echo "arquivo inválido";
	}
?>