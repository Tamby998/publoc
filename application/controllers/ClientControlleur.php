<?php
class ClientControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Client');
	}
  function index(){
			$this->load->view('insertion_client');
	}
  function save(){
  $data=$this->Model_Client->save_client();
  echo json_encode($data);
	$this->load->view('loginClient');
	}
	function listClient(){
	$data['clients'] = $this->Model_Client->client_list();
	$this->load->view('clientlist', $data);
}
function client_data(){
	$data=$this->Model_Client->client_list();
	echo json_encode($data);
	}
	public function delete($ID_CLIENT2){
		$data = $this->Model_Client->delete_client($ID_CLIENT2);
		$blogs['clients']=$this->Model_Client->client_list();
		$this->load->view('clientlist', $blogs);
	}
	public function update_status(){
		if (isset($_REQUEST['$status'])) {
			$res = $this->Model_Client->update_status();
		}
		$data['clients']=$this->Model_Client->client_list();
		$this->load->view('clientlist', $data);
	}
	public function update(){
		$data = $this->Model_Client->update_client();
		echo json_encode($data);
		$this->load->view('profile_client');
	}
}
