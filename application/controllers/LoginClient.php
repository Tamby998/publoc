<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginClient extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Client');
    }

	public function index()
	{
			if($this->Client->logged_id())
			{

				redirect("homeClientControlleur");

			}else{
	            $this->form_validation->set_rules('EMAIL_CLIENT', 'Votre Email', 'required');
	            $this->form_validation->set_rules('MOT_DE_PASS', 'Mot de passe', 'required');


	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header"><b><i class="glyphicon glyphicon-warning-sign"></i> Le {field}</b> ne peut pas être vide</div></div>');


				if ($this->form_validation->run() == TRUE) {


	            $EMAIL_CLIENT = $this->input->post("EMAIL_CLIENT", TRUE);
	            $MOT_DE_PASS = $this->input->post('MOT_DE_PASS', TRUE);


	            $checking = $this->Client->check_login('client', array('EMAIL_CLIENT' => $EMAIL_CLIENT), array('MOT_DE_PASS' => $MOT_DE_PASS));


	            if ($checking != FALSE) {
	                foreach ($checking as $apps) {

	                    $session_data = array(
	                        'ID_CLIENT2'   => $apps->ID_CLIENT2,
	                        'EMAIL_CLIENT' => $apps->EMAIL_CLIENT,
	                        'NOM_CLIENT' => $apps->NOM_CLIENT,
	                        'PRENOM_CLIENT' => $apps->PRENOM_CLIENT,
	                        'ADRESSE_CLIENT' => $apps->ADRESSE_CLIENT,
	                        'NUM_CLIENT' => $apps->NUM_CLIENT,
	                        'STATUS' => $apps->status,
	                        'TYPE_COMPTE' => $apps->TYPE_COMPTE
	                    );
                      $status = $apps->status;
                      if ($status == 1) {
                        // code...
                        $this->session->set_userdata($session_data);
                        redirect('homeClientControlleur/');
                      }else {
                        $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                            <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Votre compte est actuellement désactivé. Veuillez contacter votre administrateur!</div></div>';
                        $this->load->view('loginClient', $data);
                      }
	                    //set session userdata
	                    //$this->session->set_userdata($session_data);

	                    //redirect('homeClientControlleur/');
                      //$this->load->view('acceuilAdmin');
	                }
	            }else{

	            	$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
	                	<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Nom d \'utilisateur ou mot de passe incorrect !</div></div>';
	            	$this->load->view('loginClient', $data);
	            }

	        }else{

	            $this->load->view('loginClient');
	        }
		}
	}
}
