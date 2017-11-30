<?php  
	class pages_model extends CI_Model{
		public function can_login($username, $password){
			$this->db->where('Username',$username);
			$this->db->where('Password',$password);
			$query = $this->db->get('user');
			if ($query->num_rows() > 0){
				return true;			
			}else{
				return false;
			}
		}

		public function fetch_data_user(){
			$query = $this->db->get('user');
			return $query;
		}
	}
?>