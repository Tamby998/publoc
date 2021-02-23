<?php
class RegisseurControlleur extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Regisseur');
		$this->load->model('Panneau_Model');
		$this->load->model('Model_Client');
		$this->load->model('Regisseur');
		$this->load->model('Admin');
		$this->load->library('upload');
	}

  function index(){
			$this->load->view('insertion_regisseur');
	}

  function save(){
				$ID_REGISSEUR 	     = $this->input->post('ID_REGISSEUR');
				$ENTREPRISE 	   		 = $this->input->post('ENTREPRISE');
				$CONTACT_REGISSEUR   = $this->input->post('CONTACT_REGISSEUR');
				$EMAIL_REGISSEUR  	 = $this->input->post('EMAIL_REGISSEUR');
				$ADRESSE    				 = $this->input->post('ADRESSE');
				$MOT_DE_PASS	   		 = $this->input->post('MOT_DE_PASS');

				$config = array(
					'upload_path' => './upload' ,
					'allowed_types' => 'jpg|png|jpeg|gif' ,
					'max_size' => '4000',
					'encrypt_name' => TRUE ,
				);

			$this->upload->initialize($config);
			if (!$this->upload->do_upload('LOGO')) {
					echo $this->upload->display_errors();
				}else{
					$fd= $this->upload->data();
					$fn=$fd['file_name'];
					$data = array(
						'ID_REGISSEUR'       => $ID_REGISSEUR,
						'ENTREPRISE' 	   		 => $ENTREPRISE,
						'CONTACT_REGISSEUR'  => $CONTACT_REGISSEUR,
						'EMAIL_REGISSEUR'  	 => $EMAIL_REGISSEUR,
						'ADRESSE'    				 => $ADRESSE,
						'MOT_DE_PASS'   		 => $MOT_DE_PASS,
						'LOGO'   		 				 => $fn
					);
					$this->Model_Regisseur->save_regisseur($data);
					$this->load->view('loginRegisseur');
				}
	}

	function listRegisseur(){
	$data['regisseurs'] = $this->Model_Regisseur->regisseur_list();
	$this->load->view('regisseurlist', $data);
	}

function ajout_panneau(){
	$data['ville'] = $this->Model_Client->fetch_country();
	$data['quartier'] = $this->Admin->quartier();
	//$data['villes'] = $this->Model_Regisseur->getVille();
	$data['types'] = $this->Model_Regisseur->fetch_country();
	$this->load->view('ajout_panneau', $data);
}
function fetch_state()
{
 if($this->input->post('id_type'))
 {
	echo $this->Model_Regisseur->fetch_state($this->input->post('id_type'));
 }
}

function save_pan(){
	$ID_PANNEAU 	   = $this->input->post('ID_PANNEAU');
	$TYPE   				 = $this->input->post('TYPE');
	$SERVICE   		 	 = $this->input->post('SERVICE');
	$FACE   				 = $this->input->post('FACE');
	$LUMIERE   		   =$this->input->post('LUMIERE');
	$LARGEUR   		 	 =$this->input->post('LARGEUR');
	$LONGUEUR   		 = $this->input->post('LONGUEUR');
	$LOGITUDE  	 	 	 =$this->input->post('LOGITUDE');
	$LATITUDE    	 	 =$this->input->post('LATITUDE');
	$REFERENCE    	 = $this->input->post('REFERENCE');
	$ADRESSE    	 	 = $this->input->post('ADRESSE');
	$DESCRIPTION     = $this->input->post('DESCRIPTION');
	$VILLE   			   = $this->input->post('VILLE');
	$HABILLAGE   	   = $this->input->post('HABILLAGE');
	$ID_REGISSEUR    = $this->input->post('ID_REGISSEUR');
	$INFO    				 = $this->input->post('INFO');
	$MOT_CLES    		 = $this->input->post('MOT_CLES');
	$MENSUEL    		 = $this->input->post('MENSUEL');
	$ANNUEL    		   = $this->input->post('ANNUEL');
	$SEMESTRIEL    	 = $this->input->post('SEMESTRIEL');
	$POSE    	 			 = $this->input->post('POSE');
	$TAXE    	 			 = $this->input->post('TAXE');
	$Impression    	 = $this->input->post('Impression');

	$config = array(
		'upload_path' => './upload' ,
		'allowed_types' => 'jpg|png|jpeg|gif' ,
		'max_size' => '4000'
	);

	$this->upload->initialize($config);
	if (!$this->upload->do_upload('image_panneau')) {
			echo $this->upload->display_errors();
		}else{
			$fd= $this->upload->data();
			$fn=$fd['file_name'];
			$data = array(
				'ID_PANNEAU' 	   => $ID_PANNEAU,
	      'TYPE'   				 => $TYPE,
	      'SERVICE'   		 => $SERVICE,
	      'FACE'   				 => $FACE,
	      'LUMIERE'   		 => $LUMIERE,
	      'LARGEUR'   		 => $LARGEUR,
	      'LONGUEUR'   		 => $LONGUEUR,
	      'LOGITUDE'  	 	 => $LOGITUDE,
	      'LATITUDE'    	 => $LATITUDE,
	      'REFERENCE'    	 => $REFERENCE,
	      'ADRESSE'    	 	 => $ADRESSE,
	      'DESCRIPTION'    => $DESCRIPTION,
	      'VILLE'   			 => $VILLE,
	      'HABILLAGE'   	 => $HABILLAGE,
	      'ID_REGISSEUR'   => $ID_REGISSEUR,
				'image_panneau'  => $fn,
				'INFO '   			 => $INFO,
				'MOT_CLES'    	 => $MOT_CLES,
				'MENSUEL'    		 => $MENSUEL,
				'ANNUEL'    		 => $ANNUEL,
				'SEMESTRIEL'     => $SEMESTRIEL,
				'POSE'    	 		 => $POSE,
				'TAXE'    	 		 => $TAXE,
				'Impression'     => $Impression
			);
				$data=$this->Model_Regisseur->save_panneau($data);
				$this->load->view('acceuilRegisseur');
		}

}

function annuaire(){
	$this->load->view('annuaire_acceuil');
	}

	function regisseur_data(){
		$data = $this->Model_Regisseur->regisseur_list();
		echo json_encode($data);
		}

		public function update_status(){
			if (isset($_REQUEST['$status'])) {
				$res = $this->Model_Regisseur->update_status();
			}
			$data['regisseurs']=$this->Model_Regisseur->regisseur_list();
			$this->load->view('regisseurlist', $data);
		}
		public function update_type(){
			if (isset($_REQUEST['$status'])) {
				$res = $this->Model_Regisseur->update_type();
			}
			$data['regisseurs']=$this->Model_Regisseur->regisseur_list();
			$this->load->view('regisseurlist', $data);
		}



		public function list($ID_REGISSEUR){
			//$data['panneaus'] = $this->Model_Regisseur->getRegisseurById($ID_REGISSEUR);
			$data['disponibles'] = $this->Model_Regisseur->disponible_panneau($ID_REGISSEUR);
			$data['cartes'] = $this->Regisseur->recup($ID_REGISSEUR);
			$this->load->view('panneau_regisseur', $data);
		}
		public function edit($ID_PANNEAU){
			$data['ville'] = $this->Model_Client->fetch_country();
			$data['quartier'] = $this->Admin->quartier();
			$data['panneau'] = $this->Panneau_Model->getPanneauById($ID_PANNEAU);
			$data['sous_type'] = $this->Admin->type_sous();
			$data['types'] = $this->Model_Regisseur->fetch_country();
			$this->load->view('edit_panneau', $data);
		}
		public function update(){
			$data = $this->Panneau_Model->update_panneau();
			echo json_encode($data);
			redirect("homeRegisseurControlleur");
		}
		public function delete_panneau($ID_PANNEAU){
			$data = $this->Panneau_Model->delete_panneau($ID_PANNEAU);
			redirect("homeRegisseurControlleur");
		}
		public function listpanneau($ID_REGISSEUR){
			$data['panneaus'] = $this->Model_Regisseur->getRegisseurById($ID_REGISSEUR);
			$this->load->view('panneau_admin', $data);
		}
		public function update_status_panneau(){
			if (isset($_REQUEST['$status'])) {
				$res = $this->Model_Regisseur->update_status_panneau();
			}
			$data['regisseurs'] = $this->Model_Regisseur->regisseur_list();
			$this->load->view('regisseurlist', $data);
		}
		public function update_verifier_panneau(){
			if (isset($_REQUEST['$status'])) {
				$res = $this->Model_Regisseur->update_verifier_panneau();
			}
			$data['regisseurs'] = $this->Model_Regisseur->regisseur_list();
			$this->load->view('regisseurlist', $data);
		}
		public function disponible($ID_REGISSEUR){
			$data['disponibles'] = $this->Model_Regisseur->disponible_panneau($ID_REGISSEUR);
			$this->load->view('disponible', $data);
		}
		public function assigner($ID_PANNEAU){
			$data['lists'] = $this->Model_Regisseur->list_client();
			$data['panneau'] = $this->Panneau_Model->getPanneauById($ID_PANNEAU);
			$this->load->view('assigner', $data);
		}
		public function assigner_pa(){
			$data=$this->Model_Client->save_carte();
			echo json_encode($data);
		$this->load->view('acceuilRegisseur');
		}
		public function proffessionnel($ID_REGISSEUR){
			$data['infos'] = $this->Model_Regisseur->getProById($ID_REGISSEUR);
			$this->load->view('proffessionnel', $data);
		}
		public function panneau($ID_PANNEAU){
			$data['panneau'] = $this->Model_Regisseur->getByRecup($ID_PANNEAU);
			$this->load->view('panneau_regi', $data);
		}
		public function update_gerer(){
			if (isset($_REQUEST['$gerer'])) {
				$res = $this->Model_Regisseur->update_gerer();
			}
			$data['regisseurs'] = $this->Model_Regisseur->regisseur_list();
			$this->load->view('regisseurlist', $data);
		}


}
