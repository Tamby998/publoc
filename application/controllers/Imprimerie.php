<?php
class Imprimerie extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Imprimerie_model');
	}
	function index(){
		$data['imprimeries']=$this->Imprimerie_model->imprimerie_list();
		$this->load->view('imprimerie_view', $data);
	}

	function imprimerie_data(){
		$data=$this->Imprimerie_model->imprimerie_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->Imprimerie_model->save_imprimerie();
		echo json_encode($data);
		$datas['imprimeries']=$this->Imprimerie_model->imprimerie_list();
		$this->load->view('imprimerie_view', $datas);
	}

	public function update_status(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Imprimerie_model->update_status();
		}
		$data['imprimeries']=$this->Imprimerie_model->imprimerie_list();
		$this->load->view('imprimerie_view', $data);
	}
	public function edit($id){
		$data['imprimerie'] = $this->Imprimerie_model->getImprimerieById($id);
		$this->load->view('edit_imprimerie', $data);
	}
	public function update(){
		$data = $this->Imprimerie_model->update_imprimerie();
		echo json_encode($data);
		$datas['imprimeries']=$this->Imprimerie_model->imprimerie_list();
		$this->load->view('imprimerie_view', $datas);
	}
	public function delete($id){
		$data = $this->Imprimerie_model->delete_imprimerie($id);
		$datas['imprimeries']=$this->Imprimerie_model->imprimerie_list();
		$this->load->view('imprimerie_view', $datas);
	}

	}
