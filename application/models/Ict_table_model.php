<?php
	class Ict_table_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_timetables_ict2(){
			$query = $this->db->query("query string");
			return $query->result_array();
		}
	}
