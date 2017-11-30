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
			elseif ($page == 'login')
			{
				$data['title'] = ucfirst($page);
				$this->load->view('pages/'.$page);
			}
			elseif ($page == 'ict_2' or $page == 'ict_3')
			{	
				$data['timetable_date'] = $this->ict_table_model->get_timetable_ict2();
				$data['timetable'] = $data['timetable_date'];
				$this->load->view('pages/'.$page, $data);
			}
			elseif ($page == '') 
			{
				# code...
			}
		}
	}
?>