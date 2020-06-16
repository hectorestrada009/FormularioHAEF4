<?php

class musica

{

	protected $cancion;
	protected function album(){
		print "SO";
	} 
}

class rock extends SO {
	public function reproducirCancion(){
		return $this -> reproducirCancion();
	}

	public function songName($songName){
		$this -> songName = $songName;
	}

	public function songName(){
		print $this -> songName; 
	}
}

 ?>