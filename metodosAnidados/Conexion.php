<?php
class Conexion {
    private $dbh;

	public function __destruct(){
		$this->dbh = null;
    }
    
    final protected function getConnection()
	{
            
		$connection = array(
			'driver'		=> 'mysql',
			'server'		=> 'localhost',
			'dbName'		=> 'curso_yii_2',
			'dbUser'		=> 'pruebas',
            'dbPassword'	=> 'Pass@1234',
		);
		try{
			$this->dbh = new PDO (
				$connection['driver'] . ':host=' . $connection['server'] . ';dbname=' . $connection['dbName'],
				$connection['dbUser'],
				$connection['dbPassword'],
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
			);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->dbh;
		}catch(PDOException $e){
			die ('Error al conectarse a la base de datos');
		}
	}
}