<?php
	class Pages extends CI_Controller{
		
		public function view ($page = 'home'){
			if(!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
				show_404();
			}
			// $this->load->model('Course_model');
			if ($page == 'home' or $page == 'login') {
				// $data['title'] = ucfirst($page);
				$this->load->view('pages/'.$page);
			}
			elseif ($page == 'ict_2' or $page == 'ict_3')
			{	
				$data['timetable_date'] = $this->ict_table_model->get_timetable_ict2();
				$data['timetable'] = $data['timetable_date'];
				$this->load->view('pages/'.$page, $data);
			}
			elseif ($page == 'login')//can thiet thi sua
			{
				$data['title'] = ucfirst($page);
				$this->load->view('pages/'.$page);
			}

			if ($this->session->userdata('username') != '') {
				if ($page == 'course_ict') 
				{
					$data['timetable_date'] = $this->ict_table_model->get_timetable_ict2();
					$data['timetable'] = $data['timetable_date'];
					$data['ongoing'] = $this->Course_model->get_ict3_courses_ongoing();
					$data['upcomming'] = $this->Course_model->get_ict3_courses_upcomming();
					$data['completed'] = $this->Course_model->get_ict3_courses_completed();
					$this->load->view('pages/'.$page, $data);
				}
				elseif ($page == '1') //mobile
				{	
					$data['ongoing'] = $this->Course_model->get_ict3_courses_ongoing();
					$data['upcomming'] = $this->Course_model->get_ict3_courses_upcomming();
					$data['completed'] = $this->Course_model->get_ict3_courses_completed();
					$data['mobile'] = $this->Course_model->get_ict3_mobile();
					$this->load->view('pages/'.$page, $data);
				}
				elseif ($page == 'profile') 
				{
					// $data['profile'] = $this->User_model->
					$data['ongoing'] = $this->Course_model->get_ict3_courses_ongoing();
					$data['upcomming'] = $this->Course_model->get_ict3_courses_upcomming();
					$data['completed'] = $this->Course_model->get_ict3_courses_completed();
					$this->load->view('pages/'.$page, $data);
				}

			}

		}

		public function login_validation(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username','required');
			$this->form_validation->set_rules('password', 'Password','required');
			if ($this->form_validation->run()) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->load->model('pages_model');
				if ($this->pages_model->can_login($username, $password)) {
					$session_data = array(
						'username' => $username
						);
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'pages/view/course_ict');//need to change to dashboard things
				}else{
					$this->session->set_flashdata('error','Invalid Username and Password');
					redirect(base_url() . 'pages/enter');//need to change to something 
				}
			}else{
				$this->load->view('pages/login'); 
			}
		}
		public function enter(){
			if ($this->session->userdata('username')!= '') {
				echo $this->session->userdata('username');
				$data['username'] = $this->session->userdata('username');
				$this->load->view('pages/course_ict', $data);
			}else{
				redirect(base_url() . 'pages/view/login');
			}
		}
		public function logout(){
			$this->session->unset_userdata('username');
			redirect(base_url());
		}
	}
?>