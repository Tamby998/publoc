<?php
class HomeAdminControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		  $this->load->model('Admin');
	}

	function index(){
		if($this->Admin->logged_id())
		{

			$this->load->view('acceuilAdmin');

		}else{

			redirect("loginAdmin");

		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('loginAdmin');
	}
	public function type_panneau(){
		$datas['types'] = $this->Admin->type_list();
		$this->load->view('type_panneau', $datas);
	}
	public function save_type(){
		$data=$this->Admin->save_types();
		echo json_encode($data);
		$datas['types'] = $this->Admin->type_list();
		$this->load->view('type_panneau', $datas);
	}
	public function edit($id){
		$data['type'] = $this->Admin->getTypeById($id);
		$this->load->view('edit_type', $data);
	}
	public function update(){
		$data = $this->Admin->update_type();
		echo json_encode($data);
		$datas['types'] = $this->Admin->type_list();
		$this->load->view('type_panneau', $datas);
	}
	public function delete($id){
		$data = $this->Admin->delete_type($id);
		$datas['types'] = $this->Admin->type_list();
		$this->load->view('type_panneau', $datas);
	}


	public function ville(){
		$datas['villes'] = $this->Admin->type_ville();
		$this->load->view('type_ville', $datas);
	}
	public function save_ville(){
		$data=$this->Admin->save_ville();
		echo json_encode($data);
		$datas['villes'] = $this->Admin->type_ville();
		$this->load->view('type_ville', $datas);
	}
	public function edit_ville($id){
		$data['type'] = $this->Admin->getVilleById($id);
		$this->load->view('edit_ville', $data);
	}
	public function update_ville(){
		$data = $this->Admin->update_ville();
		echo json_encode($data);
		$datas['villes'] = $this->Admin->type_ville();
		$this->load->view('type_ville', $datas);
	}
	public function delete_ville($id){
		$data = $this->Admin->delete_ville($id);
		$datas['villes'] = $this->Admin->type_ville();
		$this->load->view('type_ville', $datas);
	}
	public function sous_type(){
		$datas['souss'] = $this->Admin->type_sous();
		$datas['types'] = $this->Admin->type_list();
		$this->load->view('sous_type', $datas);
	}
	public function save_sous(){
		$data=$this->Admin->save_sous();
		echo json_encode($data);
		$datas['types'] = $this->Admin->type_list();
		$datas['souss'] = $this->Admin->type_sous();
		$this->load->view('sous_type', $datas);
	}
	public function edit_sous($id){
		$data['type'] = $this->Admin->getSousById($id);
		$this->load->view('edit_sous', $data);
	}
	public function update_sous(){
		$data = $this->Admin->update_sous();
		echo json_encode($data);
		$datas['types'] = $this->Admin->type_list();
		$datas['souss'] = $this->Admin->type_sous();
		$this->load->view('sous_type', $datas);
	}
	public function delete_sous($id){
		$data = $this->Admin->delete_sous($id);
		$datas['souss'] = $this->Admin->type_sous();
		$datas['types'] = $this->Admin->type_list();
		$this->load->view('sous_type', $datas);
	}
	public function save_quartier(){
		$data=$this->Admin->save_quartier();
		echo json_encode($data);
		$datas['villes'] = $this->Admin->type_ville();
		$datas['quartier'] = $this->Admin->quartier();
		$this->load->view('quartier', $datas);
	}

	public function quartier(){
		$datas['villes'] = $this->Admin->type_ville();
		$datas['quartier'] = $this->Admin->quartier();
		$this->load->view('quartier', $datas);
	}
	public function edit_quartier($id){
		$data['type'] = $this->Admin->getQuartierById($id);
		$this->load->view('edit_quartier', $data);
	}
	public function update_quartier(){
		$data = $this->Admin->update_quartier();
		echo json_encode($data);
		$datas['villes'] = $this->Admin->type_ville();
		$datas['quartier'] = $this->Admin->quartier();
		$this->load->view('quartier', $datas);
	}
	public function delete_quartier($id){
		$data = $this->Admin->delete_quartier($id);
		$datas['villes'] = $this->Admin->type_ville();
		$datas['quartier'] = $this->Admin->quartier();
		$this->load->view('quartier', $datas);
	}
	public function service(){
		$data['services'] = $this->Admin->service();
		$this->load->view('service', $data);
	}
	function prestataire_service(){
		$data=$this->Admin->save_service();
		echo json_encode($data);
		$datas['services'] = $this->Admin->service();
		$this->load->view('service', $datas);
	}
	function edit_service($id_realisation){
		$data['type'] = $this->Admin->getServiceById($id_realisation);
		$this->load->view('edit_service', $data);
	}
	public function update_service(){
		$data = $this->Admin->update_service();
		echo json_encode($data);
		$datas['services'] = $this->Admin->service();
		$this->load->view('service', $datas);
	}
	public function delete_service($id_prestataire){
		$data = $this->Admin->delete_service($id_prestataire);
		$datas['services'] = $this->Admin->service();
		$this->load->view('service', $datas);
	}
}
