<?php
class Operacija extends Calculator  {
	public $id;       
	public $number1;
	public $number2;
	public $operation;
	public $result;
	public $date;

	public static $tableName="mnozenje";
	public static $keyName  ="id";  
}

