<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPrestataire extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Prestataire');
    }


	public function index()
	{
			if($this->Prestataire->logged_id())
			{

				redirect("homePrestataireControlleur");

			}else{
	            $this->form_validation->set_rules('EMAIL_PRESTATAIRE', 'Votre Email', 'required');
	            $this->form_validation->set_rules('MOT_DE_PASS', 'Mot de passe', 'required');


	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header"><b><i class="glyphicon glyphicon-warning-sign"></i> Le {field}</b> ne peut pas être vide</div></div>');


				if ($this->form_validation->run() == TRUE) {


	            $EMAIL_PRESTATAIRE = $this->input->post("EMAIL_PRESTATAIRE", TRUE);
	            $MOT_DE_PASS = $this->input->post('MOT_DE_PASS', TRUE);


	            $checking = $this->Prestataire->check_login('prestataire', array('EMAIL_PRESTATAIRE' => $EMAIL_PRESTATAIRE), array('MOT_DE_PASS' => $MOT_DE_PASS));


	            if ($checking != FALSE) {
	                foreach ($checking as $apps) {

	                    $session_data = array(
	                        'ID_PRESTATAIRE'            => $apps->ID_PRESTATAIRE,
	                        'EMAIL_PRESTATAIRE'         => $apps->EMAIL_PRESTATAIRE,
	                        'MOT_DE_PASS'               => $apps->MOT_DE_PASS,
	                        'NOM_PRESTATAIRE'           => $apps->NOM_PRESTATAIRE,
	                        'CONTACT_PRESTATAIRE'       => $apps->CONTACT_PRESTATAIRE
	                    );
                      $status = $apps->status;
                      if ($status == 1) {
                        // code...
                        $this->session->set_userdata($session_data);
                        redirect('homePrestataireControlleur/');
                      }else {
                        // code...
                        $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                            <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Votre compte est actuellement désactivé. Veuillez contacter votre administrateur!</div></div>';
                        $this->load->view('loginPrestataire', $data);
                      }
	                    //set session userdata
	                    //$this->session->set_userdata($session_data);

	                   // redirect('homePrestataireControlleur/');
                      //$this->load->view('acceuilAdmin');
	                }
	            }else{

	            	$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
	                	<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Nom d \'utilisateur ou mot de passe incorrect !</div></div>';
	            	$this->load->view('loginPrestataire', $data);
	            }

	        }else{

	            $this->load->view('loginPrestataire');
	        }
		}
	}
}
