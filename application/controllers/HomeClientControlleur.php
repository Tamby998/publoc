<?php
class HomeClientControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		  $this->load->model('Client');
			$this->load->model("Model_Client");
			$this->load->model("Admin");
			$this->load->model("Model_Prestataire");
			$this->load->model("Model_Regisseur");

	}

	function index(){
		if($this->Client->logged_id())
		{
			$data['villes'] = $this->Admin->type_ville();
			$data['sous_type'] = $this->Admin->type_sous();
			$data["infos"]=$this->Client->getInfos();
			$data['types'] = $this->Model_Regisseur->fetch_country();
			$data['ville'] = $this->Model_Client->fetch_country();
			$data['quartier'] = $this->Admin->quartier();
			$this->load->view('acceuilClient', $data);

		}else{

			redirect("loginClient");

		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
	function concepteur(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('annuaire_client', $data);
	}
	function imprimerie(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('annuaire_client_imprimerie', $data);
	}
	function conseil(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('annuaire_client_conseil', $data);
	}
	function recherche(){
		$data['villes'] = $this->Admin->type_ville();
		$data['sous_type'] = $this->Admin->type_sous();
		$data["infos"]=$this->Client->getInfos();
		$data['types'] = $this->Model_Regisseur->fetch_country();
		$data['ville'] = $this->Model_Client->fetch_country();
		$data['quartier'] = $this->Admin->quartier();
		$VILLE = $this->input->post('VILLE');
		$ville = $this->input->post('ville');
		$type = $this->input->post('type');
		$TYPE = $this->input->post('TYPE');
		$etat_regisseur = $this->input->post('etat_regisseur');
		$data_session =array(
			"VILLE" => $this->input->post('VILLE'),
			"ville" => $this->input->post('ville'),
			"TYPE" => $this->input->post('TYPE'),
			"type" => $this->input->post('type'),
			"etat_regisseur" => $this->input->post('etat_regisseur'),
		);
		$this->session->set_userdata($data_session);

		if (empty($VILLE) AND  !empty($TYPE)) {
			$data['results'] = $this->Client->cherche_ville($ville,$TYPE, $etat_regisseur);
			$this->load->view('recherche',$data);
		}else if (empty($VILLE) AND empty($TYPE)) {
			$data['results'] = $this->Client->cherche_ville_type_only($ville,$type, $etat_regisseur);
			$this->load->view('recherche',$data);
		}else if(!empty($VILLE) AND empty($TYPE)){
			$data['results'] = $this->Client->cherche_ville_only($VILLE,$type, $etat_regisseur);
			$this->load->view('recherche',$data);
		}else if(!empty($VILLE) AND !empty($TYPE)){
			$data['results'] = $this->Client->cherche($VILLE,$TYPE, $etat_regisseur);
			$this->load->view('recherche',$data);
		}
		
		// else {
		// 	$data['results'] = $this->Client->cherche($VILLE,$TYPE, $etat_regisseur);
		// 	$this->load->view('recherche',$data);
		// }
	}
	public function voir_liste(){
		$VILLE = $this->input->post('VILLE');
		$ville = $this->input->post('ville');
		$TYPE = $this->input->post('TYPE');
		$etat_regisseur = $this->input->post('etat_regisseur');
		if (empty($VILLE)) {
			// code...
			$data['results'] = $this->Client->cherche_ville($ville,$TYPE, $etat_regisseur);
			$this->load->view('voir_liste',$data);
		}else {
			$data['results'] = $this->Client->cherche($VILLE,$TYPE, $etat_regisseur);
			// code...
			$this->load->view('voir_liste',$data);
		}
	}
	public function contact($ID_REGISSEUR){
		$data['contact'] = $this->Client->getPanneauById($ID_REGISSEUR);
		$data['detail']= $this->Model_Client->plusdedetails($ID_REGISSEUR);
		$this->load->view('details_regisseur', $data);
	}
	public function profile(){
		$this->load->view('profile_client');
	}
	public function edit(){
		$this->load->view('edit_client');
	}
	public function carte_client(){
		$data["infos"]=$this->Client->getInfos();
		$this->load->view('list_panneau', $data);
	}
	public function demande_client(){
		$this->load->view('demande_client');
	}
	public function insert(){
		$data=$this->Model_Client->save_demande();
		echo json_encode($data);
		$this->load->view('profile_client');
	}
	public function list_demande($ID_CLIENT2){
		$data['datas'] = $this->Model_Client->recuperation($ID_CLIENT2);
		$this->load->view('list_demande', $data);
	}
	public function ajout($ID_PANNEAU){
		$data['carte'] = $this->Model_Client->macarte($ID_PANNEAU);
		$this->load->view('confirm_carte' ,$data);
	}
	public function insert_carte(){
		$data=$this->Model_Client->save_carte();
		echo json_encode($data);
		$this->load->view('profile_client');
	}
	public function carte($ID_CLIENT2){
		$data["cartes"]=$this->Model_Client->getCarte($ID_CLIENT2);
		$this->load->view('carte_client', $data);
	}
	function fetch_state()
	{
	 if($this->input->post('id_type'))
	 {
		echo $this->Model_Regisseur->fetch_state($this->input->post('id_type'));
	}
}
 public function plusdetails($ID_PANNEAU){
	 //a resoudre
	 //$data['regisseur']= $this->Model_Client->plusdedetailsregisseur($ID_REGISSEUR);
	 $data['detail']= $this->Model_Client->plusdedetails($ID_PANNEAU);
	 //var_dump($data);
	 $data['liste']= $this->Model_Client->listeplus($data['detail']->ID_REGISSEUR);
	 //var_dump($dataS);
	 $this->load->view('plusdedetails', $data);
 }
 public function mesemplacement($ID_CLIENT2){
	 $data["infos"]=$this->Client->getMes($ID_CLIENT2);
	 $this->load->view('list_panneau', $data);
 }
function favori(){
	 $ID_PANNEAU 	     = $this->input->post('txt_hidden');
	 $ID_CLIENT2 	   		 = $this->input->post('txt_hidden1');
	 $id_favoris   = $this->input->post('favoris');
	 $ID_REGISSEUR  	 = $this->input->post('txt_hidden3');
	 $data = array(
	 	'ID_PANNEAU'       => $ID_PANNEAU,
	 	'ID_CLIENT2' 	   		 => $ID_CLIENT2,
	 	'id_favoris'  => $id_favoris,
	 	'ID_REGISSEUR'  	 => $ID_REGISSEUR

	 );
	 $this->Model_Client->save_favoris($data);
	 $this->load->view('profile_client');
	 }
	 public function favoris($ID_CLIENT2){
		 $data['favoris'] = $this->Model_Client->list_fav($ID_CLIENT2);
		 $this->load->view('list_favoris', $data);
	 }
	 public function delete_favoris($id_favoris){
		 $data = $this->Model_Client->delete_favoris($id_favoris);
		 $this->load->view('profile_client');
	 }
	 function fetch_state_quartier()
	 {
		if($this->input->post('id_ville'))
		{
		 echo $this->Model_Client->fetch_state_quartier($this->input->post('id_ville'));
	 }
	}
	public function mesemplacements($ID_CLIENT2){
		$data["infos"]=$this->Client->getMes($ID_CLIENT2);
		$this->load->view('list_rese', $data);
	}
}
