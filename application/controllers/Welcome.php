<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
	  parent::__construct();
	  $this->load->model("Panneau_Model");
	  $this->load->model("Model_Prestataire");
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
	public function index()
	{
		$data["infos"]=$this->Panneau_Model->getInfos();
		$this->load->view('welcome_message', $data);
	}
	function concepteur(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('annuaire_acceuil', $data);
	}
	function imprimerie(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('annuaire_acceuil_imprimerie', $data);
	}
	function conseil(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('annuaire_acceuil_conseil', $data);
	}
	function recherche(){
		$titre = $this->input->post('titre');
		$data['results'] = $this->Concepteur_model->cherche($titre);
		$this->load->view('recherche_annuaire',$data);
	}
	function rechercheimp(){
		$titre = $this->input->post('titre');
		$data['results'] = $this->Imprimerie_model->cherche($titre);
		$this->load->view('recherche_imprimerie',$data);
	}
	function recherchecons(){
		$titre = $this->input->post('titre');
		$data['results'] = $this->Conseil_model->cherche($titre);
		$this->load->view('recherche_conseil',$data);
	}

}
