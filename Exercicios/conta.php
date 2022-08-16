<?php 

class Conta
{
	
		var $numAge;
		var $numConta;
		var $nome;
		var $saldo;

	
		function ImprimeEtiqueta()	
		{
			print 'Idade: ' . $this->numAge . "<br>";
			print 'Numero da Conta: ' . $this->numConta . "<br>";
			print 'Nome: ' . $this->nome . "<br>";
			print 'Saldo: ' . $this->saldo . "<br>";
		}
}
 ?>