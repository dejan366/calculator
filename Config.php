<?php
class Config{
	const DBHOST = "localhost"; //host db
	const DBNAME = "tablica";   //ime tabele
	const DBUSER = "root";  //korisnik baze
	const DBPASS = "";      //sifra
	
	static function  autoload($klasa){ //pozivanje klasa
	require_once("class/{$klasa}.php");
}
}

spl_autoload_register('Config::autoload');


