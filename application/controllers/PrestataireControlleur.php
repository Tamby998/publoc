<?php
class PrestataireControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Prestataire');

		$this->load->library('upload');
	}
  function index(){
			$this->load->view('insertion_prestataire');
	}
  public function save(){
  //$data=$this->Model_Prestataire->save_prestataire();
  //echo json_encode($data);
	//$this->load->view('loginPrestataire');
	$ID_PRESTATAIRE 	   = $this->input->post('ID_PRESTATAIRE');
	$NOM_PRESTATAIRE	   		 = $this->input->post('NOM_PRESTATAIRE');
	$CONTACT_PRESTATAIRE   = $this->input->post('CONTACT_PRESTATAIRE');
	$EMAIL_PRESTATAIRE  	 = $this->input->post('EMAIL_PRESTATAIRE');
	$TYPE_ABONNEMENT    				 = $this->input->post('TYPE_ABONNEMENT');
	$MOT_DE_PASS	   		 = $this->input->post('MOT_DE_PASS');

	$config = array(
		'upload_path' => './upload' ,
		'allowed_types' => 'jpg|png|jpeg|gif' ,
		'max_size' => '4000',
		'encrypt_name' => TRUE ,
	);

$this->upload->initialize($config);
if (!$this->upload->do_upload('logo_prestataire')) {
		echo $this->upload->display_errors();
	}else{
		$fd= $this->upload->data();
		$fn=$fd['file_name'];
		$data = array(
			'ID_PRESTATAIRE'       => $ID_PRESTATAIRE,
			'NOM_PRESTATAIRE' 	   => $NOM_PRESTATAIRE,
			'CONTACT_PRESTATAIRE'  => $CONTACT_PRESTATAIRE,
			'EMAIL_PRESTATAIRE'  	 => $EMAIL_PRESTATAIRE,
			'TYPE_ABONNEMENT'    	 => $TYPE_ABONNEMENT,
			'MOT_DE_PASS'   		   => $MOT_DE_PASS,
			'logo_prestataire'   		 				 => $fn
		);
		$this->Model_Prestataire->save_prestataire($data);
		$this->load->view('loginPrestataire');
	}
}
	public function listPrestataire(){
		$data['prestataires'] = $this->Model_Prestataire->prestataire_list();
		$this->load->view('prestatairelist', $data);
}
public function prestataire_data(){
	$data=$this->Model_Prestataire->prestataire_list();
	echo json_encode($data);
	}
	public function delete($ID_PRESTATAIRE){
		$data = $this->Model_Prestataire->delete_prestataire($ID_PRESTATAIRE);
		$blogs['prestataires']=$this->Model_Prestataire->prestataire_list();
		$this->load->view('prestatairelist', $blogs);
	}
	public function update_status(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Model_Prestataire->update_status();
		}
		$data['prestataires']=$this->Model_Prestataire->prestataire_list();
		$this->load->view('prestatairelist', $data);
	}
	public function save_fiche(){
		//$data=$this->Model_Prestataire->save_prestataire();
		//echo json_encode($data);
		//$this->load->view('loginPrestataire');
		$ID_PRESTATAIRE 	   = $this->input->post('txt_hidden');
		$id	   							 = $this->input->post('id');
		$description   = $this->input->post('description');
		$service  	 = $this->input->post('service');
		$nbre  	 = $this->input->post('nbre');

		$config = array(
			'upload_path' => './upload' ,
			'allowed_types' => 'jpg|png|jpeg|gif' ,
			'max_size' => '4000',
			'encrypt_name' => TRUE ,
		);

	$this->upload->initialize($config);
	if (!$this->upload->do_upload('photo_coverture')) {
			echo $this->upload->display_errors();
		}else{
			$fd= $this->upload->data();
			$fn=$fd['file_name'];
			$data = array(
				'ID_PRESTATAIRE'       => $ID_PRESTATAIRE,
				'id' 	   => $id,
				'description'  => $description,
				'service'  	 => $service,
				'nbre'   		   => $nbre,
				'photo_coverture'   		 				 => $fn
			);
			$this->Model_Prestataire->save_fiche($data);
			$datas['fiche'] = $this->Model_Prestataire->fiche($ID_PRESTATAIRE);
			$this->load->view('fiche_presta', $datas);
		}
	}
	public function update_fiche(){
		$data = $this->Model_Prestataire->update_fiche();
		echo json_encode($data);
		$datas['fiche'] = $this->Model_Prestataire->fiche($ID_PRESTATAIRE);
		$this->load->view('fiche_presta', $datas);
	}
	public function save_real(){

			//$data=$this->Model_Prestataire->save_prestataire();
			//echo json_encode($data);
			//$this->load->view('loginPrestataire');
			$ID_PRESTATAIRE 	   = $this->input->post('txt_hidden');
			$id_realisation	   							 = $this->input->post('id_realisation');
			$description   = $this->input->post('description');

			$config = array(
				'upload_path' => './upload' ,
				'allowed_types' => 'jpg|png|jpeg|gif' ,
				'max_size' => '4000',
				'encrypt_name' => TRUE ,
			);

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('nom_image')) {
				echo $this->upload->display_errors();
			}else{
				$fd= $this->upload->data();
				$fn=$fd['file_name'];
				$data = array(
					'ID_PRESTATAIRE'       => $ID_PRESTATAIRE,
					'id_realisation' 	   => $id_realisation,
					'description'  => $description,
					'nom_image'   		 				 => $fn
				);
				$this->Model_Prestataire->save_real($data);
				$datas['realisation'] = $this->Model_Prestataire->realisation($ID_PRESTATAIRE);
				$this->load->view('realisation', $datas);
			}
	}
	public function update_status_imprimerie(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Model_Prestataire->update_status_imprimerie();
		}
		$data['prestataires']=$this->Model_Prestataire->prestataire_list();
		$this->load->view('prestatairelist', $data);
	}
	public function update_status_conseil(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Model_Prestataire->update_status_conseil();
		}
		$data['prestataires']=$this->Model_Prestataire->prestataire_list();
		$this->load->view('prestatairelist', $data);
	}
	public function update_status_concepteur(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Model_Prestataire->update_status_concepteur();
		}
		$data['prestataires']=$this->Model_Prestataire->prestataire_list();
		$this->load->view('prestatairelist', $data);
	}
}
