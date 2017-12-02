<?php
	class File_model extends CI_Model{
		public function __construct(){
			// parent::__construct();
			$this->load->database();
		}

		public function put_file_db($courseID, $fileName, $path, $username){
			// $this->db->simple_query("INSERT INTO files (CourseID, FileName, Path, UserID) VALUES ('1','abc.pdf','C:\xampp\htdocs\abc.pdf',(SELECT UserID from user WHERE username='user2'))");
			$query = $this->db->query("INSERT INTO files (CourseID, FileName, Path, UserID) VALUES (".$courseID.", '".$fileName."', '".$path."',(SELECT UserID from user WHERE username='".$username."'))");
		}

		public function get_file_db($username){
			$query = $this->db->query("SELECT FileName, FullName, Path FROM files inner join user on files.UserID = user.UserID WHERE files.UserID = (SELECT UserID from user WHERE username='".$username."')");
			return $query->result_array();
		}
	}
?>