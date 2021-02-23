<?php
class Model_Prestataire extends CI_Model{

	function prestataire_list(){
		$hasil=$this->db->get('prestataire');
		return $hasil->result();
	}

	function save_prestataire($data){
	$result=$this->db->insert('prestataire',$data);
	return true;
	}
	function save_fiche($data){
	$result=$this->db->insert('fiche_presta',$data);
	return true;
	}
	function save_real($data){
	$result=$this->db->insert('realisation',$data);
	return true;
	}

  	function update_prestataire(){
  		$ID_PRESTATAIRE       = $this -> input  -> post('ID_PRESTATAIRE');
  		$NOM_PRESTATAIRE      = $this -> input  -> post('NOM_PRESTATAIRE');
  		$CONTACT_PRESTATAIRE  = $this -> input  -> post('CONTACT_PRESTATAIRE');
  		$EMAIL_PRESTATAIRE    = $this -> input  -> post('EMAIL_PRESTATAIRE');
  		$TYPE_ABONNEMENT      = $this -> input  -> post('TYPE_ABONNEMENT');
  		$MOT_DE_PASS          = $this -> input  -> post('MOT_DE_PASS');

      $this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
  		$this->db->set('NOM_PRESTATAIRE', $NOM_PRESTATAIRE);
  		$this->db->set('CONTACT_PRESTATAIRE', $CONTACT_PRESTATAIRE);
  		$this->db->set('EMAIL_PRESTATAIRE', $EMAIL_PRESTATAIRE);
  		$this->db->set('TYPE_ABONNEMENT', $TYPE_ABONNEMENT);
  		$this->db->set('MOT_DE_PASS', $MOT_DE_PASS);

  		$result=$this->db->update('prestataire');

  		return $result;
  	}
		public function update_status(){
			$ID_PRESTATAIRE = $_REQUEST['$ID_PRESTATAIRE'];
			$status = $_REQUEST['$status'];
			if ($status == 1) {
				$status = 0;
			}else {
				$status = 1;
			}
			$data = array('status' => $status);
			$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
			return $this->db->update('prestataire', $data);
		}
		public function update_status_imprimerie(){
			$ID_PRESTATAIRE = $_REQUEST['$ID_PRESTATAIRE'];
			$status = $_REQUEST['$status'];
			if ($status == 1) {
				$status = 0;
			}else {
				$status = 1;
			}
			$data = array('imprimerie' => $status);
			$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
			return $this->db->update('prestataire', $data);
		}
		public function update_status_conseil(){
			$ID_PRESTATAIRE = $_REQUEST['$ID_PRESTATAIRE'];
			$status = $_REQUEST['$status'];
			if ($status == 1) {
				$status = 0;
			}else {
				$status = 1;
			}
			$data = array('conseil' => $status);
			$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
			return $this->db->update('prestataire', $data);
		}
		public function update_status_concepteur(){
			$ID_PRESTATAIRE = $_REQUEST['$ID_PRESTATAIRE'];
			$status = $_REQUEST['$status'];
			if ($status == 1) {
				$status = 0;
			}else {
				$status = 1;
			}
			$data = array('concepteur' => $status);
			$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
			return $this->db->update('prestataire', $data);
		}

		function delete_prestataire($ID_PRESTATAIRE){
			$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
			$this->db->delete('prestataire');
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
	function prestatairey($ID_PRESTATAIRE){
		return $this->db->select('*')
						->from('prestataire')
						->where('ID_PRESTATAIRE',$ID_PRESTATAIRE)
						->get()
						->result_array();
	}
	function profile_presta($ID_PRESTATAIRE){
		$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
		$query = $this->db->get('prestataire');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return false;
		}
	}
	function fiche_recuperation($ID_PRESTATAIRE){
		$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
		$query = $this->db->get('fiche_presta');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return false;
		}
	}
	function fiche_real($ID_PRESTATAIRE){
		$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
		$hasil=$this->db->get('realisation');
		return $hasil->result();
	}
	function fiche($ID_PRESTATAIRE){
		$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
		$query = $this->db->get('fiche_presta');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return false;
		}
	}
	function update_fiche(){
		$ID_PRESTATAIRE=$this->input->post('txt_hidden');
		$field = array(
			'id'		    =>$this->input->post('id'),
			'description'		        =>$this->input->post('description'),
			'service'		=>$this->input->post('service'),
			'nbre'			=>$this->input->post('nbre')
		);
		$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
		$this->db->update('fiche_presta', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}
	function realisation($ID_PRESTATAIRE){
		$this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
		$hasil=$this->db->get('realisation');
		return $hasil->result();
	}
	function delete_real($id_realisation){
		$this->db->where('id_realisation', $id_realisation);
		$this->db->delete('realisation');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}
}
