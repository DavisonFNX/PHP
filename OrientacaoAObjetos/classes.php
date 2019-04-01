<?php
	
	class Pessoa {

		public $nome; //atributo

		public function falar(){ //método
			return "O meu nome é ".$this->nome;
		}
	}

	$davison = new Pessoa();

	$davison->nome = "Davison Nascimento";

	echo $davison->falar();

?>