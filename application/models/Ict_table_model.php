<?php
	class Ict_table_model extends CI_Model{
		public function __construct(){
			// parent::__construct();
			$this->load->database();
		}
		
		public function get_timetable_ict2(){
			$query = $this->db->query("SELECT DATE_FORMAT(Date, '%d-%m-%y') AS Date, TimeTable.StartTime,TimeTable.EndTime,TimeTable.Room,Course.CourseName,User.Fullname FROM TimeTable INNER JOIN Course ON TimeTable.CourseID = Course.CourseID INNER JOIN User ON Course.UserID = User.UserID ORDER BY TimeTable.Date, TimeTable.StartTime LIMIT 6;");
			return $query->result_array();
		}
	}
?>