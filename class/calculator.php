<?php
abstract class Calculator{
	static $tableName = "";
	
	//unos
 function unos(){
	 $pdo = Konekcija::get();
	 $nazivtabele=static::$tableName;
	 $nazivKljuca=static::$keyName;
	 
	 $query = "insert into {$nazivtabele} set ";
	 $query.=$this->getFields();
	$pdo->exec($query);
	$this->$nazivKljuca = $pdo->lastInsertId();
	}
	
	function getFields(){
		$fields="";
		$nazivKljuca = static::$keyName;
		foreach($this as $k=>$v){
			if($k==$nazivKljuca){
				continue;
			}
			$fields.="{$k}='{$v}',";
			
		}
		$fields= rtrim($fields,",");

			return $fields;
	}

		//prikaz
	static function uzmi($filter=""){
		$pdo = Konekcija::get();
		$nazivtabele=static::$tableName;
		$nazivKlase=get_called_class();
		$st = $pdo->query("select * from {$nazivtabele} {$filter}");
		$st->setFetchMode(PDO::FETCH_CLASS,$nazivKlase);
		$res = [];
		while($one = $st->fetch()){
			$res[] = $one;
		}
		return $res;
	}

}
