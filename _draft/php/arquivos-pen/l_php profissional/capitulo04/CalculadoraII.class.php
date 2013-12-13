<?php
/**
 * C�digo-fonte do livro "PHP Profissional"
 * Autores: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - todos os direitos reservados
 *
 * LICEN�A: Este arquivo-fonte est� sujeito a Atribui��o 2.5 Brasil, da licen�a Creative Commons, 
 * que encontra-se dispon�vel no seguinte endere�o URI: http://creativecommons.org/licenses/by/2.5/br/
 * Se voc� n�o recebeu uma c�pia desta licen�a, e n�o conseguiu obt�-la pela internet, por favor, 
 * envie uma notifica��o aos seus autores para que eles possam envi�-la para voc� imediatamente.
 *
 *
 * Source-code of "PHP Profissional" book
 * Authors: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - all rights reserved
 *
 * LICENSE: This source file is subject to Attibution version 2.5 Brazil of the Creative Commons 
 * license that is available through the following URI:  http://creativecommons.org/licenses/by/2.5/br/
 * If you did not receive a copy of this license and are unable to obtain it through the web, please 
 * send a note to the authors so they can mail you a copy immediately.
 *
 */
 
//Classe modificada, a partir da classe Calculadora
class CalculadoraII {

	const ADICAO        = 1,
				SUBTRACAO     = 2,
				MULTIPLICACAO = 3,
				DIVISAO       = 4;

	private $operandos,
	        $memoria;
					
  protected $resultado;
	
	// M�todos P�blicos
	
	public function __construct() {}
	
	public function __call($metodo, $args) {
		
		static $metodos_validos = array('somar', 'subtrair', 'multiplicar', 'dividir');
		
		//validar m�todo que est� sendo chamdado
		if (!in_array(strtolower($metodo), $metodos_validos))
			return 'M�todo inexistente!';
			
		$operacao = 'p' . $metodo;
		$this->$operacao($args[0], $args[1]);
		return $this->getResultado();
  }
	
	public function armazenar() {
		$this->validar($this->resultado);
		$this->memoria = $this->resultado;
		return true;
	}
	
	public function recuperar() {
		$this->validar($this->memoria);
		return $this->memoria;
	}
	
	
	// M�todos Privados
	
	protected function getResultado() {
		return $this->resultado;
	}
	
	private function psomar($num1, $num2) {
		$this->validar($num1, $num2);
		$this->operacao(self::ADICAO);
	}
	
	private function psubtrair($num1, $num2) {
		$this->validar($num1, $num2);
		$this->operacao(self::SUBTRACAO);
	}
	
	private function pmultiplicar($num1, $num2) {
		$this->validar($num1, $num2);
		$this->operacao(self::MULTIPLICACAO);
	}
	
	private function pdividir($num1, $num2) {
		//valida��o especial, $num2 n�o pode ser 0
		if (0 == $num2)
			throw new Exception('Divis�o por zero');
		
		$this->validar($num1, $num2);
		$this->operacao(self::DIVISAO);
	}
	
	private function validar() {
		//passagem de par�metros vari�vel
		$val = func_get_args();
		
		for ($i = 0; $i < count($val); $i++) {
			if (!is_numeric($val[$i]))
				throw new Exception(sprintf("Valor '%s' n�o � v�lido", $val[$i]));
		}
		
		//dados ok, registrar valores para opera��o
		$this->operandos = $val;
		return true;
	}
	
	private function operacao($operador) {

		switch($operador) {
			
			case self::ADICAO:
				$this->resultado = $this->operandos[0] + $this->operandos[1];
				break;
				
			case self::SUBTRACAO:
				$this->resultado = $this->operandos[0] - $this->operandos[1];
				break;
				
			case self::MULTIPLICACAO:
				$this->resultado = $this->operandos[0] * $this->operandos[1];
				break;
				
			case self::DIVISAO:
				$this->resultado = $this->operandos[0] / $this->operandos[1];
				break;
				
			default:
			  throw new Exception('Opera��o n�o permitida');
				break;
		}
	}
}
?>