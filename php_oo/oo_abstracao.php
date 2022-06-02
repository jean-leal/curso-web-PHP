<?php

	//modelo
	class Funcionario{
		//atributos
		public $nome = 	null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters e setter (overloading/ sobrecarga)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

		//getters e setter
		function setNome($nome){
			$this->nome = $nome;
		}
		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function getNome(){
			return $this->nome;
		}
		function getNumFilhos(){
			return $this->numFilhos;
		}



		//métodos
		function resumirCadFunc() {
			return "$this->nome possui $this->numFilhos filho(s)";
		}

		function modificarNumFilhos($numFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;		
		}

	}

	//metodo magico __get e __set
	$y = new Funcionario();
	$y->__set('nome', 'Jose');
	$y->__set('numFilhos', 2);
	echo $y->__get('nome').' possui '. $y->__get('numFilhos').' filho(os)';
	echo '<br>';


	//metodo convencional
	$x = new Funcionario();
	$x->setNome('Maria');
	$x->setNumFilhos(0);
	echo $x->resumirCadFunc();
	
?>