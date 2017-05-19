<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_DO extends CI_Controller {

	public function test(){
		$this->load->view('TEST/test');		
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('portal_do_m', 'do');
		$this->load->model('ListFaculty', 'do_ajax');
		$this->load->model('ListStudents', 'stud_ajax');
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		$group='Deans_Office';
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('dportal/login', 'refresh', 301);
		}
		elseif (!$this->ion_auth->in_group($group))
		{
			return show_error('You must logged in as a Dean\'s Office Account to view this page.');
		}
		
	}

	public function forum3(){
		redirect('forum','refresh');
	}

	public function logout(){
		$this->ion_auth->logout();
		redirect('dportal/login','refresh',301);

	}

	public function index()
	{
		$data['title']="DO Portal";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/index');
		$this->load->view('portal/dportal/template/footer');
		$this->load->view('portal/dportal/template/js');
	}

	//students
	public function students()
	{
		$data['title']="DO Portal";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/faculty/ajaxList');
		$this->load->view('portal/dportal/students/student');
		$this->load->view('portal/dportal/template/footer');
	}

	public function addStudent()
	{	
		$this->form_validation->set_rules( 'id', 'ID Number', 'trim|required|is_unique[students_informations.id]', array('is_unique' => 'This id Number already exists. Please choose another one.')); 
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('mi', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('course', 'Course', 'trim|required'); 


		if ($this->form_validation->run() === FALSE) {
			$data['title']="DO Portal";
			$data['get_courses'] = $this->do->get_courses();
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/students/addStudent');
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		} 
		else 
		{
			$id = $this->input->post('course');

			$username 	= $this->input->post('id');
			$first_name = $this->input->post('first_name'); 
			$mi 		= $this->input->post('mi');
			$last_name  = $this->input->post('last_name');
			$password  	= $username;
			$college_dept = $this->session->college_dept; 
			$group		  = array('5'); //students group id
			$course 	= $this->do->get_coursename($id) ;
			
			$this->ion_auth->register($username, $password, $email=$username, $additional_data ='none', $group);
			$this->do->registerStudent(
							$username, 
							$first_name, 
							$mi, 
							$last_name,
							$course, 
							$college_dept 
							);
			
			redirect('dportal/students/section/'.$id.'/'.$username,'refresh');
		}
	}


	function finalizRegistration()
	{
		$course_id = $this->uri->segment(4);
		$id = $this->uri->segment(5);
		$data['get_section'] = $this->do->get_sections($course_id);
		$data['title']="DO Portal";
		$this->form_validation->set_rules('section_name', 'Section', 'trim|required'); 

		if($this->form_validation->run() === false){
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/students/final', $data);
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		}
		else
		{
			$section = $this->input->post('section_name');

			$this->do->registerSection($id, $section, $course_id);
			
			redirect('dportal/students','refresh');
			
		}
	}

	//student ajax
	public function ajax_listStudents()
	{
		$list = $this->stud_ajax->get_datatablesStudents();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $student) {
			$no++;
			$row = array();
			
			$row[] = $student->id;
			$row[] = $student->first_name;
			$row[] = $student->last_name;
			$row[] = $student->course;
			$row[] = $student->year;
			$row[] = $student->section;
			// $row[] = $student->status;

			// $enruld = $student->enrolled;
			// switch ($enruld) {
			// 	case 1:
			// 		$sagot = 'yes';
			// 		break;
				
			// 	default:
			// 		$sagot = 'no';
			// 		break;
			// }

			// $row[] = $sagot;

			$link = site_url('dportal/student/view/'.$student->id); 

			//add html for action
			$row[] = '<center><a class="btn btn-sm btn-primary" href="'.$link.'" title="View")">
					<i class="glyphicon glyphicon-pencil"></i> View</a>
				  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$student->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a></center>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->stud_ajax->count_all(),
						"recordsFiltered" => $this->stud_ajax->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	//faculty
	public function addFaculty()
	{	
		$this->form_validation->set_rules( 'id', 'ID Number', 'trim|required|is_unique[faculty_users.username]', array('is_unique' => 'This username already exists. Please choose another one.')); 
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('mi', 'Last Name', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$data['title']="DO Portal";
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/faculty/addFaculty');
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		} 
		else 
		{
			$username 	= $this->input->post('id');
			//Sanitize
			$string = $username;
			preg_match_all('!\d!', $string, $matches);
			$id = (int)implode('',$matches[0]);

			$first_name = $this->input->post('first_name'); 
			$mi 		= $this->input->post('mi');
			$last_name  = $this->input->post('last_name');
			$password  	= $id;
			$college_dept = $this->session->college_dept; 
			$group		  = array('6'); //deans_office group id

			$this->ion_auth->register($username, $password, $email=$username, $additional_data ='none', $group);
			$this->do_ajax->registerFaculty($username, $first_name, $mi, $last_name, $college_dept);
			redirect('dportal/faculty','refresh');
		}
	}

	public function viewSections()
	{
		$id = $this->uri->segment(4);
		$course = $this->uri->segment(5);
		//validate form input
		$this->form_validation->set_rules('section_name', 'Section Name', 'trim|required'); 

		if($this->form_validation->run() === false){

		$data['title']="Manage Schedule";
		$data['get_section'] = $this->do->get_sections($course);
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/faculty/list-section');
		$this->load->view('portal/dportal/template/footer');
		}
		else{
			$section_name = $this->input->post('section_name');
			

			redirect('dportal/assign/'.$id.'/'.$course.'/'.$section_name,'refresh');
		}
	}

	public function selectCourse()
	{
		$id=$this->uri->segment(4);
		//validate form input
		$this->form_validation->set_rules('course_name', 'Select Course', 'trim|required'); 

		if($this->form_validation->run() === false){

		$data['title']="Manage Schedule";
		$data['get_courses'] = $this->do->get_courses();
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/faculty/list-course', $data);
		$this->load->view('portal/dportal/template/footer');
		}
		else{
			$course = $this->input->post('course_name');
			redirect('dportal/assign/select-section/'.$id.'/'.$course,'refresh');
		}
	}

	public function setAssign()
	{	
		$id = $this->uri->segment(3);
		$id_sched = $this->uri->segment(4);

		$this->do->setAssignSched($id, $id_sched);

		redirect('dportal/faculty/view/'.$id,'refresh');
	}

	public function assignSched()
	{
		$course = $this->uri->segment(4);
		$section_name = $this->uri->segment(5);

		$data['title']="Manage Schedule";
		$data['get_schedules'] = $this->do->get_schedules($course,$section_name);
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/faculty/list-sched',$data);
		$this->load->view('portal/dportal/template/footer');
	
	}

	public function viewFaculty()
	{
		$id = $this->uri->segment(4);
		$data['title']="DO Portal";
		$data['get_info'] = $this->do_ajax->get_specific($id);
		$data['get_schedules'] = $this->do->get_specific($id);
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/faculty/ajaxList');
		$this->load->view('portal/dportal/faculty/view',$data);
		$this->load->view('portal/dportal/template/footer');
	}

	public function faculty()
	{
		$data['title']="DO Portal";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/faculty/ajaxList');
		$this->load->view('portal/dportal/faculty/faculty');
		$this->load->view('portal/dportal/template/footer');
	}

	
	//ajax datatable
	public function ajax_listFaculty()
	{
		$list = $this->do_ajax->get_datatablesFaculty();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $faculty) {
			$no++;
			$row = array();
			$username = $faculty->username;
			$string = $username;
			preg_match_all('!\d!', $string, $matches);
			$id = (int)implode('',$matches[0]);
			
			$row[] = $id;
			$row[] = $faculty->first_name;
			$row[] = $faculty->mi;
			$row[] = $faculty->last_name;

			$link = site_url('dportal/faculty/view/'.$faculty->faculty_id); 

			//add html for action
			$row[] = '<center><a class="btn btn-sm btn-primary" href="'.$link.'" title="View")">
					<i class="glyphicon glyphicon-pencil"></i> View</a>
				  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$faculty->faculty_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a></center>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->do_ajax->count_all(),
						"recordsFiltered" => $this->do_ajax->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


	//courses
	public function courses()
	{
		$data['get_courses'] = $this->do->get_courses();
		$data['title']="DO Portal";

		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/course/index', $data);
		$this->load->view('portal/dportal/template/footer');
		$this->load->view('portal/dportal/template/js');
	}

	//view scheds
	public function viewsched()
	{
		//validate form input
		$this->form_validation->set_rules('course_name', 'Select Course', 'trim|required'); 

		if($this->form_validation->run() === false){

		$data['title']="Manage Schedule";
		$data['get_courses'] = $this->do->get_courses();
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/viewsched/index');
		$this->load->view('portal/dportal/template/footer');
		}
		else{
			$course = $this->input->post('course_name');
			redirect('dportal/viewsections/'.$course,'refresh');
		}
	}

	public function view_sections()
	{
		$course = $this->uri->segment(3);
		//validate form input
		$this->form_validation->set_rules('section_name', 'Section Name', 'trim|required'); 

		if($this->form_validation->run() === false){

		$data['title']="Manage Schedule";
		$data['get_section'] = $this->do->get_sections($course);
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/viewsched/view-section');
		$this->load->view('portal/dportal/template/footer');
		}
		else{
			$section_name = $this->input->post('section_name');
			$course = $this->uri->segment(3);
			redirect('dportal/viewschedules/'.$course.'/'.$section_name,'refresh');
		}
	}

	public function view_schedules()
	{	

		$course = $this->uri->segment(3);
		$section_name = $this->uri->segment(4);
		$data['title']="Manage Schedule";
		$data['get_schedules'] = $this->do->get_schedules();
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/viewsched/view-sched',$data);
		$this->load->view('portal/dportal/template/footer');
	
	}

	//delete specific class
	public function delete_s_class()
	{
		$course = $this->uri->segment(3);
		$section_name = $this->uri->segment(4);
		$id = $this->uri->segment(5);
		if ($this->do->delete_class($course, $section_name, $id)) {
			redirect('dportal/viewschedules/'.$course.'/'.$section_name);
		}
		else{
			echo 'error';
		}
	}

	//add scheds
	public function addSched()
	{
		//validate form input
		$this->form_validation->set_rules('course_name', 'Section Name', 'trim|required'); 

		if($this->form_validation->run() === false){

			$data['title']="DO Portal";

			$data['get_courses'] = $this->do->get_courses();
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/template/js');
			$this->load->view('portal/dportal/addsched/index', $data);
			$this->load->view('portal/dportal/template/footer');

		}
		else{
			$course = $this->input->post('course_name');
			redirect('dportal/sched/upload/'.$course,'refresh');
		}
	}

	function upload_sched_view()
	{
		$data['title']="Dean's Office";	
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/addsched/upload-sched');
		$this->load->view('portal/dportal/template/footer');
		$this->load->view('portal/dportal/template/js');

	}

	public function upload_sched(){

		$course_id = $this->uri->segment(4);

		$config['upload_path'] 		= './uploads/scheds/';
		$config['allowed_types']	= '*';

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('sched_file'))
		{	
			$data['title']="Dean's Office";	
            $data = array('error' => $this->upload->display_errors());
		
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/addsched/upload-sched');
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		}
		else
		{
			$file_name = $this->upload->data('file_name');

			$file = './uploads/scheds/'.$file_name;
			//load the excel library
			$this->load->library('excel');
			$objReader = PHPExcel_IOFactory::createReader('Excel2007');
			$objReader->setReadDataOnly(TRUE);
			$excelReader = PHPExcel_IOFactory::createReaderForFile($file);
			$excelObj = $excelReader->load($file);
			$worksheet = $excelObj->getSheet(0);
			$lastRow = $worksheet->getHighestRow();
			
			//NILOOP MO DITO YUNG CELLS SA EXCEL FILE
			for ($row = 2; $row <= $lastRow; $row++) {
				$cellA = $worksheet->getCell('A'.$row)->getValue();
				$cellB = $worksheet->getCell('B'.$row)->getValue();
				$cellC = $worksheet->getCell('C'.$row)->getValue();
				$cellD = $worksheet->getCell('D'.$row)->getValue();

				switch ($cellA) {
					case 'Year:':
							$string = $cellB;
							preg_match_all('!\d!', $string, $matches);
							$year = (int)implode('',$matches[0]);
						break;

					case 'Section:':
							$section = $cellB;
						break;

					case ' ':
					case null:
					case 'Subjcode':
						break;

					default:
						$this->do->insert_sched($cellA, $cellB, $cellC, $cellD, $year, $section, $course_id); 
						break;
				}
			}
		
		}
			redirect('viewsched' ,'refresh');
	}


	//curriculums
	public function list_curriculums($id=null, $cu=null)
	{
		$data['get_curriculum'] = $this->do->list_curriculums();

		$data['title']="DO Portal";

		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/curriculum/index', $data);
		$this->load->view('portal/dportal/template/footer');
		$this->load->view('portal/dportal/template/js');
	}

	public function addCurriculum(){
	
		//validate form input
		$this->form_validation->set_rules( 'curriculum_name', 'Curriculum', 'trim|required|is_unique[portal_curriculums.curriculum_name]', array('is_unique' => 'This Curriculum Name already exists. Please choose another one.')); 

		if($this->form_validation->run() === false){

			$data['title']="DO Portal";

			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/curriculum/add-curriculum', $data);
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');

		}
		else{
			$curriculum_name = $this->input->post('curriculum_name') ;
			
			$id = $this->do->add_curriculum($curriculum_name);
			redirect('dportal/subjects/add/'.$this->uri->segment(4).'/'.$id ,'refresh');
		}
	}

	public function delete_curriculum($id=null, $cu=null)
	{
		$url = $this->uri->segment(4) ;
		$cu	= $this->uri->segment(5);
		$this->do->delete_curriculum($cu);

		redirect(site_url('do/curriculums/'.$url ,'refresh'));
	}

	public function view_curriculum($id=null, $cu=null)
	{
		$data['get_year1_1'] = $this->do->get_year1_1();
		$data['get_year1_2'] = $this->do->get_year1_2();
		$data['get_year2_1'] = $this->do->get_year2_1();
		$data['get_year2_2'] = $this->do->get_year2_2();
		$data['get_year3_1'] = $this->do->get_year3_1();
		$data['get_year3_2'] = $this->do->get_year3_2();
		$data['get_year4_1'] = $this->do->get_year4_1();
		$data['get_year4_2'] = $this->do->get_year4_2();

		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/curriculum/list_subjects', $data);
		$this->load->view('portal/dportal/template/footer');
		$this->load->view('portal/dportal/template/js');
	}


	public function addCourse(){
	
		//validate form input
		
		$this->form_validation->set_rules( 'course', 'Course', 'trim|required|is_unique[portal_courses.course_name]', array('is_unique' => 'This Course Name already exists. Please choose another one.')); 
		$this->form_validation->set_rules('years', 'Year', 'trim|required|numeric|min_length[1]');
		$this->form_validation->set_rules('abbrv', 'Abbriviation', 'trim|required'); 

		if($this->form_validation->run() === false){

			$data['title']="DO Portal";

			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/course/add-course', $data);
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');

		}
		else{
			$course = $this->input->post('course') ;
			$years = $this->input->post('years') ;
			$abbrv = $this->input->post('abbrv') ;
			
			$this->do->add_course($course, $years ,$abbrv);
			redirect('dportal/course','refresh');
		}
	}

	public function addSubjects($id=null, $cu=null){
		$url = $this->uri->segment(4) ;
		$cu	= $this->uri->segment(5);
		//validate form input
		$this->form_validation->set_rules( 'subject_id[]', 'Subject ID', 'trim|required|is_unique[portal_subjects.subj_code]', array('is_unique' => 'This Course Name already exists. Please choose another one.')); 
		$this->form_validation->set_rules('description[]', 'Description', 'trim|required'); 
		$this->form_validation->set_rules('units[]', 'Number of Units', 'trim|required'); 
		$this->form_validation->set_rules('sem[]', 'Number of Units', 'trim|required'); 
		$this->form_validation->set_rules('year[]', 'Year', 'trim|required|numeric|min_length[1]');

		if($this->form_validation->run() == false){
			$data['title']="DO Portal";

			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/addsubject/index', array('url' => $url , 'cu' => $cu  ));
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		}
		else{
			$limit = $this->input->post('count');	
		
			for ($count=0; $count < $limit ; $count++) { 

				$subject_id = $this->input->post('subject_id['.$count.']') ;
				$description = $this->input->post('description['.$count.']') ;
				$units = $this->input->post('units['.$count.']') ;
				$sem = $this->input->post('sem['.$count.']') ;
				$year = $this->input->post('year['.$count.']') ;

				if(!$this->do->add_subjects($subject_id, $description, $units, $sem, $year)){
					break;
				}				

			} 
			
			redirect('dportal/curriculum/'.$url.'/'.$cu ,'refresh');
		}
	}

	public function upload_view(){
		$data['title']="Dean's Office";	
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/menuBar');
		$this->load->view('portal/dportal/addsubject/upload-subject');
		$this->load->view('portal/dportal/template/footer');
		$this->load->view('portal/dportal/template/js');
	}

	public function upload_subject(){
		$url = $this->uri->segment(4) ;
		$cu	= $this->uri->segment(5);

		$config['upload_path'] 		= './uploads/subjects/';
		$config['allowed_types']	= '*';

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('ang_file'))
		{	
			$data['title']="Dean's Office";	
            $data = array('error' => $this->upload->display_errors());
		
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/addsubject/upload-subject',$data);
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		}
		else
		{
			$file_name = $this->upload->data('file_name');

			$file = './uploads/subjects/'.$file_name;
			//load the excel library
			$this->load->library('excel');
			$objReader = PHPExcel_IOFactory::createReader('Excel2007');
			$objReader->setReadDataOnly(TRUE);
			$excelReader = PHPExcel_IOFactory::createReaderForFile($file);
			$excelObj = $excelReader->load($file);
			$worksheet = $excelObj->getSheet(0);
			$lastRow = $worksheet->getHighestRow();
			
			for ($row = 3; $row <= $lastRow; $row++) {
				$cellA = $worksheet->getCell('A'.$row)->getValue();
				$cellB = $worksheet->getCell('B'.$row)->getValue();
				$cellC = $worksheet->getCell('C'.$row)->getValue();
				$cellD = $worksheet->getCell('D'.$row)->getValue();
				$cellE = $worksheet->getCell('E'.$row)->getValue();
				$this->do->add_subjects($cellA ,$cellB ,$cellC ,$cellD ,$cellE );
			}
		
		}
			redirect('dportal/curriculum/'.$url.'/'.$cu ,'refresh');
	}
}

/* End of file portal_DO.php */
/* Location: ./application/controllers/portal_DO.php */