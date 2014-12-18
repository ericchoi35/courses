<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->model('Course');
		$courses = $this->Course->get_all_courses();
		$this->load->view('index', array('courses' =>$courses));
	}

	public function create()
	{	
		if(strlen($this->input->post('name')) < 15)
		{
			$this->session->set_flashdata('error', 'Course name must be at least 15 characters.');
		} else 
		{
			$course = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description')
				);
			$this->load->model('Course');
			$this->Course->add_course($course);
		}
		redirect('/');
	}

	public function show($id)
	{
		$this->load->model('Course');
		$course = $this->Course->get_course($id);
		$this->load->view('destroy', array('course' => $course));
	}

	public function destroy()
	{
		$id = $this->input->post('id');
		$this->load->model('Course');
		$this->Course->delete_course($id);
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */