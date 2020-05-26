
<!-- Clase 1 -->

<?php

	class Musica {

		var $cancion
		var $autor
		var $disquera

		public function__construct Musica ($cancion, $autor, $disquera)

		$cancion = $cancion
		$autor = $autor
		$disquera = $disquera

	}

?>

<!-- Clase 2 -->

<?php
	
	class persona {

		var $nombre;
		protected function set_nombre($nuevo_nombre){
			$this->nombre = $nuevo_nombre;
		}
		function get_name() {
			return $this->nombre
		}
	}

?>

<!-- Clase 3 -->

<?php

	class loge{

		private function loge ($usu, $con)
		{
			$idUsuario = 0;
			if (($usu == "hector") && ($con == "1234")) {
				# code...
				$idUsuario = 7;
			}
			return $idUsuario;
		}
	}


?>