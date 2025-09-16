<?php 

if($_SERVER['SERVER_NAME'] == "localhost")
{
	//for local server
	define("ROOT", "http://localhost/atc3Copy/");

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "u630753873_atclive");

}else{
	//for online server
	define("ROOT", "http://www.atcbakery.ca");	

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "u630753873_admin");
	define("DBPASS", "IamMaster24");
	define("DBNAME", "u630753873_atclive");
}

define('APP_NAME', "ATC Bakery");