<?php 
	
	class Produto
	{
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Qualidade;

		function ImprimeEtiqueta()	
		{
			print 'Código: ' . $this->Codigo . "<br>";
			print 'Descricao: ' . $this->Descricao . "<br>";
		}
	}

	
 ?>