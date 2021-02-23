<?php
class Concepteur extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Concepteur_model');
	}
	function index(){
		$data['concepteurs']=$this->Concepteur_model->concepteur_list();
		$this->load->view('concepteur_view', $data);
	}

	function concepteur_data(){
		$data=$this->Concepteur_model->concepteur_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->Concepteur_model->save_concepteur();
		echo json_encode($data);
		$data['concepteurs']=$this->Concepteur_model->concepteur_list();
		$this->load->view('concepteur_view', $data);
	}

	public function update_status(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Concepteur_model->update_status();
		}
		$data['concepteurs']=$this->Concepteur_model->concepteur_list();
		$this->load->view('concepteur_view', $data);
	}
	public function edit($id){
		$data['concepteur'] = $this->Concepteur_model->getConcepteurById($id);
		$this->load->view('edit_concepteur', $data);
	}
	public function update(){
		$data = $this->Concepteur_model->update_concepteur();
		echo json_encode($data);
		$blogs['concepteurs']=$this->Concepteur_model->concepteur_list();
		$this->load->view('concepteur_view', $blogs);
	}
	public function delete($id){
		$data = $this->Concepteur_model->delete_concepteur($id);
		$blogs['concepteurs']=$this->Concepteur_model->concepteur_list();
		$this->load->view('concepteur_view', $blogs);
	}

}
