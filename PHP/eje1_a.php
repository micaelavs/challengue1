<?php
class Eje1{
	private $dia_actual;
	public $arr2;

	public function __construct(){
		$this->dia_actual = new \DateTime("now", new \DateTimeZone("UTC"));
	}

	public function getPrimerDiaMesActualTimestamp(){
		$f = $this->dia_actual->format('Y-m-01');
		$f2 = new \DateTime($f);
		return date_timestamp_get($f2);
	}
	public function getUltimoDiaMesActualTimestamp(){
		$f = $this->dia_actual->format('Y-m-t');
		$f2 = new \DateTime($f);
		return date_timestamp_get($f2);
	}
	public function generarSecuencia($min, $max) {
		$num1 = 0;
		$num2 = 1;
	
		$counter = 0;
		$lim = $max-$min;
		while ($counter < $lim){
			$num3 = $num2 + $num1;
			$num1 = $num2;
			$num2 = $num3;
			$counter = $counter + 1;
			echo round($num3).PHP_EOL;
		}
	}
}
$obj = (new Eje1());
$tsi =  $obj->getPrimerDiaMesActualTimestamp();
$tsf = $obj->getUltimoDiaMesActualTimestamp();

$obj->generarSecuencia($tsi,$tsf);

var_dump('fin');
?>