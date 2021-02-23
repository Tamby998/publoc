<?php
class HomeRegisseurControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		  $this->load->model('Regisseur');
		  $this->load->model('Model_Regisseur');
			$this->load->library('upload');
	}

	function index(){
		if($this->Regisseur->logged_id())
		{
			$data["infos"]=$this->Regisseur->getInfos();
			$this->load->view('profileCli',$data);

		}else{

			redirect("loginRegisseur");

		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
	public function listpann(){
		$data["lists"]=$this->Regisseur->logged_id();
		$this->load->view('listpanneau', $data);
	}
	public function edit(){
		$this->load->view('edit_regisseur');
	}
	public function update(){
		$data = $this->Regisseur->update_regisseur();
		echo json_encode($data);
		$this->load->view('acceuilRegisseur');
	}
	public function list_demande(){
		$data['demandes'] = $this->Regisseur->list_demandes();
		$this->load->view('list_demandes', $data);
	}
	public function list_panneau_reserver($ID_REGISSEUR){
		$data['cartes'] = $this->Regisseur->getCarteById($ID_REGISSEUR);
		$this->load->view('list_reserver', $data);
	}
	public function update_status(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Regisseur->update_status();
		}
		$this->load->view('acceuilRegisseur');
	}
	public function delete($id_carte){
		$data = $this->Regisseur->delete_carte($id_carte);
		$this->load->view('acceuilRegisseur');
	}
	public function profile(){
		$this->load->view('profileCli');
	}
	public function regisseur_carte($ID_REGISSEUR){
		$data['panneaus'] = $this->Model_Regisseur->getRegisseurById($ID_REGISSEUR);
		$this->load->view('acceuilRegisseur', $data);
	}
	public function cli_profile($ID_CLIENT2){
		$data['client'] = $this->Model_Regisseur->getClientByIDE($ID_CLIENT2);
		$this->load->view('cli_profile', $data);
	}
	public function professionnel(){
			$ID_REGISSEUR = $this->input->post('txt_hidden');
			$id = $this->input->post('txt_hidden1');

			$config = array(
				'upload_path' => './upload' ,
				'allowed_types' => 'jpg|png|jpeg|gif' ,
				'max_size' => '4000'
			);

			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image_pro')) {
					echo $this->upload->display_errors();
				}else{
					$fd= $this->upload->data();
					$fn=$fd['file_name'];
					$data = array(
					'id' => $id,
					'ID_REGISSEUR'   => $ID_REGISSEUR,
					'image_pro'   		 				 => $fn
				);
					$data=$this->Model_Regisseur->save_pro($data);
					redirect('HomeRegisseurControlleur');
			}
	}
	public function ajout_debut(){
		$data = $this->Model_Regisseur->ajout_debut();
		$data = $this->Model_Regisseur->historique();
		echo json_encode($data);
		$this->load->view('profileCli');
	}
	function recherche(){
		$MOT_CLES = $this->input->post('MOT_CLES');
		$data['results'] = $this->Regisseur->cherche($MOT_CLES);
		$this->load->view('recherche_p',$data);
	}
	public function historique($ID_REGISSEUR){
		$data['historiques'] = $this->Model_Regisseur->historiques($ID_REGISSEUR);
		$this->load->view('historique', $data);
	}
	public function abonnement(){
		$this->load->view('abonnement');
	}
	public function tarif(){
		$this->load->view('tarif');
	}
}
