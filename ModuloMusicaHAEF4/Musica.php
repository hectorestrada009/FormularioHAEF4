<?php

	class musica {

	public $cancion;
	public $genero;
	public $autor;
	public $ano_lan;
	public $disquera;

	//construct

	public function __construct  ($cancion, $genero, $autor, $ano_lan){

		$this->cancion = $cancion;
		$this->genero = $genero;
		$this->autor = $autor;
		$this->ano_lan = $ano_lan;
	}

	public function mensaje()
	{ 

		return 'ha entrado a la funcion'; 
	}


}

class disquera extends musica{

	public $xo;
	public $warner;
	public $sonymusic;

	public function __construct  ($xo, $warner, $sonymusic){

		$this->xo = $xo;
		$this->warner = $warner;
		$this->sonymusic = $sonymusic; 
	}
}

?>