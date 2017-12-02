<?php
	class User_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_user($user){
			$query = $this->db->query("SELECT Username, Fullname, Email FROM user WHERE Username = '".$user."';");
			return $query->result_array();
		}
	}
?>