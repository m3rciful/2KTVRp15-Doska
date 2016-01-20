<?php 
class DBH
{
	private $dbh;
	// Подключение к базе данных
	function DBH()
	{
		$db 	 = 'sergei_events';
		$user 	 = 'root';
		$pass 	 = '';
		$host 	 = 'localhost';

		$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
		$opt = array(
		 	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
		
		$this->dbh = new PDO($dsn, $user, $pass, $opt);
	}

	public function getDBH()
	{
		return $this->dbh;
	}
}
?>