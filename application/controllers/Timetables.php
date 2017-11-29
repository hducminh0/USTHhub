<?php
	class TimeTables extends CI_controller{
		public function ict_2(){
			$data ['table_title'] = 'Timetable';
			// $data['table_title'] = ucfirst(str)
			$data['timetables'] = $this->Ict_table_model->get_timetables_ict2()
			$this->load->view('timetables/ict2nd_table', $data);
		}
	}
?>