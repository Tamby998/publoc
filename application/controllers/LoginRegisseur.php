<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRegisseur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Regisseur');
    }

	public function index()
	{
			if($this->Regisseur->logged_id())
			{

				redirect("homeRegisseurControlleur");

			}else{
	            $this->form_validation->set_rules('EMAIL_REGISSEUR', 'Votre Email', 'required');
	            $this->form_validation->set_rules('MOT_DE_PASS', 'Mot de passe', 'required');


	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header"><b><i class="glyphicon glyphicon-warning-sign"></i> Le {field}</b> ne peut pas être vide</div></div>');


				if ($this->form_validation->run() == TRUE) {


	            $EMAIL_REGISSEUR = $this->input->post("EMAIL_REGISSEUR", TRUE);
	            $MOT_DE_PASS = $this->input->post('MOT_DE_PASS', TRUE);


	            $checking = $this->Regisseur->check_login('regisseur', array('EMAIL_REGISSEUR' => $EMAIL_REGISSEUR), array('MOT_DE_PASS' => $MOT_DE_PASS));


	            if ($checking != FALSE) {
	                foreach ($checking as $apps) {

	                    $session_data = array(
	                        'ID_REGISSEUR'      => $apps->ID_REGISSEUR,
	                        'EMAIL_REGISSEUR'   => $apps->EMAIL_REGISSEUR,
	                        'MOT_DE_PASS'       => $apps->MOT_DE_PASS,
	                        'ENTREPRISE'        => $apps->ENTREPRISE,
	                        'CONTACT_REGISSEUR' => $apps->CONTACT_REGISSEUR,
	                        'ADRESSE'           => $apps->ADRESSE,
	                        'LOGO'           => $apps->LOGO,
	                        'etat'           => $apps->etat
	                    );
                      $status = $apps->status;
                      if ($status == 1) {
                        // code...
                        $this->session->set_userdata($session_data);
                        redirect('homeRegisseurControlleur/');
                      }else {
                        // code...
                        $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                            <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Votre compte est actuellement désactivé. Veuillez contacter votre administrateur!</div></div>';
                        $this->load->view('loginRegisseur', $data);
                      }
	                    //set session userdata
	                    //$this->session->set_userdata($session_data);

	                    //redirect('homeRegisseurControlleur/');
                      //$this->load->view('acceuilAdmin');
	                }
	            }else{

	            	$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
	                	<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Email ou mot de passe incorrect !</div></div>';
	            	$this->load->view('loginRegisseur', $data);
	            }

	        }else{

	            $this->load->view('loginRegisseur');
	        }
		}
	}
}
