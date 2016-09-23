<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model'); 
		$this->load->model('Department_model'); 
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function all()
	{
		//get all department 
		$all = Employee_model::orderBy('is_active', 'desc')->get(); 

		$count = $all->count(); 
		//check if data found
		if ($count > 0) {
			//response all data
			$res = ['status' => true, 'data' => $all, 'count' => $count]; 
		} else {
			//otherwise response error
			$res = ['status' => false, 'message' => "No data Found", 'data' => null];
		}

		echo json_encode($res); 
	}

	public function department_list()
	{
		//get all department 
		$all = Department_model::where(['is_active' => 1])->get(); 

		$count = $all->count(); 
		//check if data found
		if ($count > 0) {
			//response all data
			$res = ['status' => true, 'data' => $all, 'count' => $count]; 
		} else {
			//otherwise response error
			$res = ['status' => false, 'message' => "No data Found", 'data' => null];
		}

		echo json_encode($res); 
	}

	public function put() {
		header('Content-Type: application/json');
        $request = (array) json_decode(file_get_contents('php://input'));

		if (isset($request['id']) && !empty($request['id'])) {
			//update
			$operation = 'update'; 
			$data = Employee_model::find($request['id']); 
			$data->employee_id = $request['employee_id'];
			$data->name = $request['name'];
			$data->designation = $request['designation'];
			$data->department_id = $request['department_id'];
			$data->is_active = (int) $request['is_active'];

	        $data->save();
		} else {
			//insert
			$operation = 'insert';

			$data = new Employee_model;

	        $data->employee_id = $request['employee_id'];
			$data->name = $request['name'];
			$data->designation = $request['designation'];
			$data->department_id = $request['department_id'];
	        $data->is_active = (int) $request['is_active'];

	        $data->save();
		}

		if (!$data){
	        	$res = ['status' => false, 'message' => "Unable to ". $operation]; 
	        } else {
	        	$res = ['status' => true, 'message' => 'Data ' . $operation . " successfull"]; 
	        }

        echo json_encode($res); 
	}

	public function get() {
		//get the id from url segment
		$id = $this->uri->segment(4); 

		$data = Employee_model::where('is_active', 1)->find($id); 
		if (!$data) {
			$res = ['status' => false, 'message' => "No active data found with ID " . $id]; 
        } else {
        	$res = ['status' => true, 'message' => "Data found", 'data' => $data]; 
        }

        echo json_encode($res); 
	}

	public function delete() {
		$id = $this->uri->segment(4); 

		$data = Employee_model::find($id); 
	        $data->delete();
		if (!$data) {
			$res = ['status' => false, 'message' => "No data found with ID " . $id]; 
        } else {
        	$res = ['status' => true, 'message' => "Data Deleted"]; 
        }

        echo json_encode($res); 
	}
}
