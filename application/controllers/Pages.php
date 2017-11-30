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
			// elseif ($page == 'upload')
			// {
			// 	$config['upload_path'] = './uploads';
			// $config['allowed_types'] = 'pdf|c|cpp|m|python|ppt|rar|zip|txt|tex';
			// $config['max_size'] = 100000;

			// $this->load->library('upload', $config);
			
			// 	$data = array('upload_data' => $this->upload->data());
			// 	$this->load->view('upload_success', $data);
				
			// }
			else
			{	
				$data['timetable_date'] = $this->ict_table_model->get_timetable_ict2();
				$data['timetable'] = $data['timetable_date'];
				$data['temp'] = 0;
				$data['title'] = ucfirst($page);
				$this->load->view('pages/'.$page, $data);
			}
		}
	}
?>