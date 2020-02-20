<?php
if(!empty($_FILES['CGR']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo-> load($_FILES['CGR']['tmp_name']);
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
					if ($cell_index == 6) {
						$valor = $cell->nodeValue;
					}
					if ($cell_index == 18){
						if ($cell->nodeValue == 'POS Muxx') {
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