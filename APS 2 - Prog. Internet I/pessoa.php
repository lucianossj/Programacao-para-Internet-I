<?php

	class Pessoa {
		
		private $nome;
		private $nasc;
		private $sexo;
		private $peso;
		private $altura;

		private $imc;
		private $categoria;

		public function setNome( $nome ){

			$this->nome = $nome;

		}

		public function getNome(){

			return $this->nome;

		}

		public function setNasc( $nasc ){

			$this->nasc = $nasc;

		}

		public function getNasc(){

			return $this->nasc;

		}

		public function setSexo( $sexo ){

			$this->sexo = $sexo;

		}

		public function getSexo(){

			return $this->sexo;

		}

		public function setPeso( $peso ){

			$this->peso = $peso;

		}

		public function getPeso(){

			return $this->peso;

		}

		public function setAltura( $altura ){

			$this->altura = $altura;

		}

		public function getAltura(){

			return $this->altura;

		}

		public function setImc($imc){

			$this->imc = $imc;

		}

		public function getImc(){

			return $this->imc;

		}

		public function setCategoria($categoria){

			$this->categoria = $categoria;

		}

		public function getCategoria(){

			return $this->categoria;

		}

	}

?>

