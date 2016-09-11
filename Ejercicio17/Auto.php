<?php
	class Auto
 {

 	/*Atributos*/
 	private $_color;
	private $_precio;
	private $_marca;
	private $_fecha;
	/*constructor*/
	public function __construct(){
		/*Obtenemos el parametro o los parametros que recibe el constructor*/
		$parametros = func_get_args();
		/*Obtenemos la cantidad de parametros*/
		$cantidad_parametros = func_num_args();
		/*En esta variable concatenamos al constructor con los parametros*/
		$funcion_constructor = '__construct'.$cantidad_parametros;
		/*Con este metodo_exists comprobamos si existe un metodo que reciba esa cantidad de parametros*/
		if(method_exists($this,$funcion_constructor))
		{ /*Si el metodo existe lo invocamos*/
			call_user_func_array(array($this,$funcion_constructor),$parametros);
		}
	}
	/*Metodos para la sobrecarga*/
	function __construct0()
	{
		$this->__construct1("");
	}

	function __construct1($color)
	{
		$this->__construct2($color,"0");
	}

	function __construct2($color,$precio)
	{
		$this->__construc3($color,$precio,$marca);
	}

	function __construct3($color,$precio,$marca)
	{
		$this->__construct4($color,$precio,$marca,$fecha);
	}

	function __construct4($color,$precio,$marca,$fecha)
	{
		$this->_color = $color;
		$this->_precio = $precio;
		$this->_marca = $marca;
		$this->_fecha = $fecha;
	}
	/*Metodos del ejercicio*/
	public function agregarImpuestos($impuesto)
	{
		$this->_precio = $this->_precio + $impuesto;
	}

	public function mostrarAuto()
	{
		echo "Color : ".$this->_color." Marca : ".$this->_marca."<br>";
		echo "Precio : ".$this->_precio." Fecha : ".$this->_fecha;
	}

 }


?>	
