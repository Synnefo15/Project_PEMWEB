<?php

class Login_model {
	
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function checkLogin($data)
	{
		$query = "SELECT * FROM user WHERE username = :username AND password = :password";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		//$this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
	}

}