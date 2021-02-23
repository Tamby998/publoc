<?php
class Conseil extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Conseil_model');
	}
	function index(){
		$data['conseils']=$this->Conseil_model->conseil_list();
		$this->load->view('conseil_view', $data);
	}

	function conseil_data(){
		$data=$this->Conseil_model->conseil_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->Conseil_model->save_conseil();
		echo json_encode($data);
		$test['conseils']=$this->Conseil_model->conseil_list();
		$this->load->view('conseil_view', $test);
	}
	public function update_status(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Conseil_model->update_status();
		}
		$data['conseils']=$this->Conseil_model->conseil_list();
		$this->load->view('conseil_view', $data);
	}
	public function edit($id){
		$data['conseil'] = $this->Conseil_model->getConseilById($id);
		$this->load->view('edit_conseil', $data);
	}
	public function update(){
		$data = $this->Conseil_model->update_conseil();
		echo json_encode($data);
		$blogs['conseils']=$this->Conseil_model->conseil_list();
		$this->load->view('conseil_view', $blogs);
	}
	public function delete($id){
		$data = $this->Conseil_model->delete_conseil($id);
		$blogs['conseils']=$this->Conseil_model->conseil_list();
		$this->load->view('conseil_view', $blogs);
	}

	}
