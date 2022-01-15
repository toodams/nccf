<?php

 
date_default_timezone_set('Africa/Lagos');

class controller
{
	var $host;
	var $username;
	var $password;
	var $database;
	var $connect;
	var $home_page;
	var $query;
	var $data;
	var $statement;
	var $filedata;

	/* UnComment For online purpose
	
	function __construct()
	{
		$this->host = 'localhost';
		$this->username = 'tootechc_toodams';
		$this->password = 'Oyindamola1';
		$this->database = 'tootechc_nccfebonyi';
		$this->home_page = 'http://localhost/nccf/master';

		$this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", "$this->username", "$this->password");

		session_start();
	}
	*/

	/* Comment For online purpose */
	function __construct()
	{
		$this->host = 'localhost';
		$this->username = 'admin';
		$this->password = 'password';
		$this->database = 'tootechc_nccfebonyi';
		$this->home_page = 'http://localhost/nccf/';

		$this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", "$this->username", "$this->password");

		session_start();
	}
	

	function execute_query()
	{
		$this->statement = $this->connect->prepare($this->query);
		$this->statement->execute($this->data);
	}

	function total_row()
	{
		$this->execute_query();
		return $this->statement->rowCount();
	}


	function redirect($page)
	{
		header('location:'.$page.'');
		exit;
	}


	function allow_session_private()
	{
		if(!isset($_SESSION['allow_user']))
		{
			$this->redirect('login.php');
		}
	}


	function allow_session_public()
	{
		if(isset($_SESSION['allow_user']))
		{
			$this->redirect('index.php');
		}
	}





	function admin_session_private()
	{
		if(!isset($_SESSION['admin_id']))
		{
			$this->redirect('login.php');
		}
	}

	function admin_session_public()
	{
		if(isset($_SESSION['admin_id']))
		{
			$this->redirect('index.php');
		}
	}

	function query_result()
	{
		$this->execute_query();
		return $this->statement->fetchAll();
	}

	function clean_data($data)
	{
	 	$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}

}

?>