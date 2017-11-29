<?php
	class Pages extends CI_Controller{
		public function view ($page = 'home'){
			if(!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
				show_404();
			}

			if ($page == 'home') {
				$data['title'] = ucfirst($page);
				$this->load->view('pages/'.$page, $data);
			}
			else
			{	
				$data['timetable_date'] = $this->ict_table_model->get_timetable_ict2();
				$data['timetable'] = $data['timetable_date'];
				$data['title'] = ucfirst($page);
				$this->load->view('pages/'.$page, $data);
			}
		}
	}
?>