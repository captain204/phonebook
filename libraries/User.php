<?php

class User{

	private $db;

	public function __construct(){

		$this->db = new Database; 
	}

	public function register_data($data){
		$this->db->query("INSERT INTO user(username,password,email,permision)
						VALUES(:username,:pw_one,:email,:user)");
		$this->db->bind(':username', $data['username']);
		$this->db->bind(':pw_one',  $data['pw_one']);
		$this->db->bind(':email',  $data['email']);
		$this->db->bind(':user',$data['user']);
		$result = $this->db->execute();
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function valid_email($email){
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			return true;
		}else{
			return false;
		}
	}

	public function user_exist($username,$password){
		$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		$result = $this->db->single();
		if ($result >= 1) {			
			return true;
		}else{

		return false;

		}

	}


	public function getid($username){
		$this->db->query("SELECT * FROM user WHERE username='$username'");
		$result = $this->db->single();
		return $result;
	}
	
}
?>
























