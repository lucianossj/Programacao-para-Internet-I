<?php

	include_once("pessoa.php");

	class Calculos {

		function calcularIMC($altura, $peso){

			$pessoa = new Pessoa();

			$altura2 = $altura * $altura;

			$pessoa->setImc($peso / $altura2);

			return $pessoa->getImc();

		}

		function verificarCategoria($imc){

			$pessoa = new Pessoa();

			$pessoa->setImc($imc);

			if($pessoa->getImc() < 18.5){

				$pessoa->setCategoria("Abaixo do peso");

			} else if ($pessoa->getImc() >= 18.5 || $pessoa->getImc() < 25){

				$pessoa->setCategoria("Peso normal/ideal");

			} else if ($pessoa->getImc() > 24.9 || $pessoa->getImc() < 30){

				$pessoa->setCategoria("Sobrepeso");

			} else if ($pessoa->getImc() > 29.9 || $pessoa->getImc() < 35){

				$pessoa->setCategoria("Obesidade - Grau I");

			} else if ($pessoa->getImc() > 34.9 || $pessoa->getImc() < 40){

				$pessoa->setCategoria("Obesidade - Grau II");

			} else if ($pessoa->getImc() > 39.9) {

				$pessoa->setCategoria("Obesidade - Grau III");

			}

			return $pessoa->getCategoria();

		}

		function mostrarTodasInformacoes($nome, $nasc, $sexo, $peso, $altura){

			$pessoa = new Pessoa();

			$pessoa->setNome($nome);
			$pessoa->setNasc($nasc);
			$pessoa->setSexo($sexo);
			$pessoa->setPeso($peso);
			$pessoa->setAltura($altura);

			$pessoa->setImc($this->calcularIMC($altura, $peso));
			$pessoa->setCategoria($this->verificarCategoria($pessoa->getImc()));

			echo("<div class='mostra-dados'>.:: Cálculo do IMC ::. <br /> <br />
			Nome: " . $pessoa->getNome() . "<br />
			Data de nascimento: ". date('d/M/y', strtotime($pessoa->getNasc())) . "<br />
			Sexo: " . $pessoa->getSexo() . "<br />
			Peso: " . $pessoa->getPeso() . " Kg <br /> 
			Altura: " . $pessoa->getAltura() . " m<br /><br />
			IMC: " . number_format($pessoa->getImc(), 2, ',', '.') . " | Categoria: " . $pessoa->getCategoria()."</div>");

		}

	}

?>