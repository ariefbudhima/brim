<?php
	class User extends CI_model{
		public function verify($uname,$pass){
					$this->db->where('username', $uname);
			    $this->db->where('password', $pass);
			    $kue = $this->db->get('admin');
			    return $kue;
		}
	}
?>
