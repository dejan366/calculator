<?php
class Konekcija{
	private static $konekcija;
	public static function get(){
		if(!self::$konekcija){  
			self::$konekcija = new PDO("mysql:host=".Config::DBHOST.";dbname=".Config::DBNAME,Config::DBUSER,Config::DBPASS);
		}
		return self::$konekcija;
	}
}