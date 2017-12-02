<?php
	class Upload extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}

		public function index(){
			$this->load->view('upload_form', array('error' => ''));
		}

		public function do_upload(){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'pdf|c|cpp|m|python|pptx|rar|zip|txt|tex|png';
			$config['max_size'] = 10000000; //kB

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('userfile')) 
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_fail', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$data['ongoing'] = $this->Course_model->get_ict3_courses_ongoing();
				$data['upcomming'] = $this->Course_model->get_ict3_courses_upcomming();
				$data['completed'] = $this->Course_model->get_ict3_courses_completed();
				$data['mobile'] = $this->Course_model->get_ict3_mobile();
				$query = $this->File_model->put_file_db(1, $this->upload->data('file_name'), $this->upload->data('file_path'), $this->session->__get('username'));
				$data['homework'] = $this->File_model->get_file_db($this->session->__get('username'));
				$this->load->view('pages/1', $data);
				// $this->load->view('upload_success', $data);
			}	
		}

		public function download_files($FileName){
			force_download("uploads/".$FileName,NULL);
		}
	}
?>