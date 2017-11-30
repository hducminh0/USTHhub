<?php
	class User_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_user($id){
			$query = $this->db->query("SELECT Fullname, Email FROM user WHERE ")
			return $query->return_array()
		}
	}
?>