<?php
class HomePrestataireControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		  $this->load->model('Prestataire');
		  $this->load->model('Model_Prestataire');
		  $this->load->model('Admin');
	}

	function index(){
		if($this->Prestataire->logged_id())
		{

			$this->load->view('acceuilPrestataire');

		}else{

			redirect("loginPrestataire");

		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
	public function edit(){
		$this->load->view('edit_prestataire');
	}
	public function update(){
		$data = $this->Prestataire->update_prestataire();
		echo json_encode($data);
		$this->load->view('acceuilPrestataire');
	}
	public function list_demande(){
		$data['demandes'] = $this->Prestataire->list_demandes();
		$this->load->view('list_demandes_presta', $data);
	}
	public function plus_profile($ID_PRESTATAIRE){
		$data['prestataires'] = $this->Model_Prestataire->profile_presta($ID_PRESTATAIRE);
		$data['recuperation_fiche'] = $this->Model_Prestataire->fiche_recuperation($ID_PRESTATAIRE);
		$data['realisations'] = $this->Model_Prestataire->fiche_real($ID_PRESTATAIRE);
		$this->load->view('profile_presta', $data);
	}
	public function fiche($ID_PRESTATAIRE){
		$data['services'] = $this->Admin->service();
		$data['fiche'] = $this->Model_Prestataire->fiche($ID_PRESTATAIRE);
		$this->load->view('fiche_presta', $data);
	}
	public function realisation($ID_PRESTATAIRE){
		$data['realisation'] = $this->Model_Prestataire->realisation($ID_PRESTATAIRE);
		$this->load->view('realisation', $data);
	}
	public function delete_real($id_realisation){
		$data = $this->Model_Prestataire->delete_real($id_realisation);
		$this->load->view('realisation');
	}
}
