<?php 
class database{
	var $host = "localhost:3306";
	var $username = "root";
	var $password = "";
	var $database = "perpustakaan";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

	function register($name,$email,$password)
	{	
		$insert = mysqli_query($this->koneksi,"INSERT INTO user(user_name,password,email,role) values('$name','$password','$email','user')");
		$this->login($email,$password,FALSE);
		return $insert;
	}

	function login($email,$password)
	{
		$query = mysqli_query($this->koneksi,"select * from user where email='$email'");
		$data_user = $query->fetch_array();
		if($data_user['role'] == 'nonaktif'){
			return FALSE;
		}
		if(password_verify($password,$data_user['password']))
		{
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_user['user_name'];
			$_SESSION['role'] = $data_user['role'];
			$_SESSION['id'] = $data_user['id_user'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
} 
?>