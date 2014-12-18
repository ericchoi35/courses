<?php

class Course extends CI_Model {

	function get_all_courses(){
		return $this->db->query("SELECT * FROM Courses")->result_array();
	}

	function add_course($course)
	{
		$query = "INSERT INTO Courses (name, description, created_at, updated_at) VALUES (?,?,NOW(),NOW())";
		$values = array($course['name'], $course['description']);
		$this->db->query($query, $values);
	}

	function get_course($id)
	{
		return $this->db->query("SELECT * FROM Courses WHERE id = ?", array($id))->row_array();
	}

	function delete_course($id)
	{
		$this->db->query("DELETE FROM Courses WHERE id = ?", array($id));
	}
}

?>