<?php
	class Pages extends CI_Controller{
		public function view ($page = 'home'){
			if(!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
				show_404();
			}
			$this->load->model('Course_model');
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
			elseif ($page == 'course_ict') 
			{
				$data['timetable_date'] = $this->ict_table_model->get_timetable_ict2();
				$data['timetable'] = $data['timetable_date'];
				$data['ongoing'] = $this->Course_model->get_ict3_courses_ongoing();
				$data['upcomming'] = $this->Course_model->get_ict3_courses_upcomming();
				$data['completed'] = $this->Course_model->get_ict3_courses_completed();
				$this->load->view('pages/'.$page, $data);
			}
			elseif ($page == '1') 
			{	
				$data['ongoing'] = $this->Course_model->get_ict3_courses_ongoing();
				$data['upcomming'] = $this->Course_model->get_ict3_courses_upcomming();
				$data['completed'] = $this->Course_model->get_ict3_courses_completed();
				$this->load->view('pages/'.$page, $data);
			}
		}
	}
?>