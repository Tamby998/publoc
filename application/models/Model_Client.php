<?php
class Model_Client extends CI_Model{

	function client_list(){
		$hasil=$this->db->get('client');
		return $hasil->result();
	}
  function save_client(){
  $data = array(
		'ID_CLIENT2' 	  => $this->input->post('ID_CLIENT2'),
		'NOM_CLIENT ' 	=> $this->input->post('NOM_CLIENT'),
		'PRENOM_CLIENT' => $this->input->post('PRENOM_CLIENT'),
		'ADRESSE_CLIENT'=> $this->input->post('ADRESSE_CLIENT'),
		'NUM_CLIENT'    => $this->input->post('NUM_CLIENT'),
		'EMAIL_CLIENT' 	=> $this->input->post('EMAIL_CLIENT'),
		'MOT_DE_PASS'   => $this->input->post('MOT_DE_PASS'),
		'TYPE_COMPTE'		=> $this->input->post('TYPE_COMPTE'),
    );
  $result=$this->db->insert('client',$data);
  return $result;
  }



	function clienty($ID_CLIENT2){
		return $this->db->select('*')
						->from('client')
						->where('ID_CLIENT2',$ID_CLIENT2)
						->get()
						->result_array();
	}
	public function update_status(){
		$ID_CLIENT2 = $_REQUEST['$ID_CLIENT2'];
		$status = $_REQUEST['$status'];
		if ($status == 1) {
			$status = 0;
		}else {
			$status = 1;
		}
		$data = array('status' => $status);
		$this->db->where('ID_CLIENT2', $ID_CLIENT2);
		return $this->db->update('client', $data);
	}

	function delete_client($ID_CLIENT2){
		$this->db->where('ID_CLIENT2', $ID_CLIENT2);
		$this->db->delete('client');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}
	function update_client(){
		$ID_CLIENT2=$this->input->post('txt_hidden');
		$field = array(
			'NOM_CLIENT'		=>$this->input->post('NOM_CLIENT'),
			'PRENOM_CLIENT'		=>$this->input->post('PRENOM_CLIENT'),
			'MOT_DE_PASS'		=>$this->input->post('MOT_DE_PASS'),
			'ADRESSE_CLIENT'		=>$this->input->post('ADRESSE_CLIENT'),
			'NUM_CLIENT'		=>$this->input->post('NUM_CLIENT'),
			'EMAIL_CLIENT'					=>$this->input->post('EMAIL_CLIENT')
		);
		$this->db->where('ID_CLIENT2', $ID_CLIENT2);
		$this->db->update('client', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}
	function save_demande(){
		$data = array(
			'ID_DEMANDE' 	  => $this->input->post('ID_DEMANDE'),
			'NOM_CLIENT ' 	=> $this->input->post('NOM_CLIENT'),
			'PRENOM_CLIENT' => $this->input->post('PRENOM_CLIENT'),
			'dimension' 		=> $this->input->post('dimension'),
			'TYPE' 					=> $this->input->post('TYPE'),
			'nombre' 				=> $this->input->post('nombre'),
			'lieu1' 				=> $this->input->post('lieu1'),
			'nombre_1' 			=> $this->input->post('nombre_1'),
			'lieu2' 				=> $this->input->post('lieu2'),
			'nombre_2' 			=> $this->input->post('nombre_2'),
			'ADRESSE_CLIENT'=> $this->input->post('ADRESSE_CLIENT'),
			'NUM_CLIENT'    => $this->input->post('NUM_CLIENT'),
			'EMAIL_CLIENT' 	=> $this->input->post('EMAIL_CLIENT'),
			'SERVICE'   		=> $this->input->post('SERVICE'),
			'TYPE_COMPTE'		=> $this->input->post('TYPE_COMPTE'),
			'ID_CLIENT2'		=> $this->input->post('ID_CLIENT2'),
		);
		$result=$this->db->insert('demande',$data);
		return $result;
	}
	public function list_demande(){
		$hasil=$this->db->get('demande');
		return $hasil->result();
	}
	public function recuperation($ID_CLIENT2){
		$this->db->where('ID_CLIENT2', $ID_CLIENT2);
		$hasil=$this->db->get('demande');
		return $hasil->result();
	}
	public function macarte($ID_PANNEAU){
		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
		$query = $this->db->get('panneau');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return false;
		}
	}
	public function save_carte(){
		$data = array(
				'id_carte'			 => $this->input->post('id_carte'),
	      'ID_PANNEAU' 	   => $this->input->post('ID_PANNEAU'),
	      'TYPE'   				 => $this->input->post('TYPE'),
	      'SERVICE'   		 => $this->input->post('SERVICE'),
	      'FACE'   				 => $this->input->post('FACE'),
	      'LUMIERE'   		 => $this->input->post('LUMIERE'),
	      'LARGEUR'   		 => $this->input->post('LARGEUR'),
	      'LONGUEUR'   		 => $this->input->post('LONGUEUR'),
	      'LOGITUDE'  	 	 => $this->input->post('LOGITUDE'),
	      'LATITUDE'    	 => $this->input->post('LATITUDE'),
	      'VILLE'   			 => $this->input->post('VILLE'),
	      'HABILLAGE'   	 => $this->input->post('HABILLAGE'),
	      'ID_CLIENT2'   	 => $this->input->post('ID_CLIENT2'),
	      'NOM_CLIENT'   	 => $this->input->post('NOM_CLIENT'),
	      'PRENOM_CLIENT'  => $this->input->post('PRENOM_CLIENT'),
	      'ID_REGISSEUR'   => $this->input->post('ID_REGISSEUR'),
	    );
	  $result=$this->db->insert('carte',$data);
	  return $result;
		}
		public function getCarte($ID_CLIENT2){
			$this->db->where('ID_CLIENT2', $ID_CLIENT2);
			$hasil=$this->db->get('carte');
			return $hasil->result();
		}
		public function plusdedetails($ID_PANNEAU){
			$this->db->select('*');
			$this->db->from('panneau');
			$this->db->join('regisseur', 'panneau.ID_REGISSEUR = regisseur.ID_REGISSEUR');
			$this->db->where('panneau.ID_PANNEAU =', $ID_PANNEAU);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->row();
			}else {
				return false;
			}
		}
		public function plusdedetailsregisseur($ID_REGISSEUR){
			$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
			$query = $this->db->get('regisseur');
			if ($query->num_rows() > 0) {
				return $query->row();
			}else {
				return false;
			}
		}
		public function listeplus($ID_REGISSEUR){
			//SELECT * FROM panneau LEFT JOIN carte ON carte.ID_PANNEAU = NULL WHERE panneau.ID_REGISSEUR = 3
			$this->db->select('panneau.ID_PANNEAU, panneau.TYPE, panneau.DESCRIPTION, panneau.ANNUEL, panneau.SEMESTRIEL, panneau.TAXE, panneau.Impression, panneau.MENSUEL, panneau.MOT_CLES, panneau.SERVICE, panneau.FACE, panneau.LUMIERE, panneau.INFO, panneau.LARGEUR, panneau.LONGUEUR, panneau.LOGITUDE, panneau.LATITUDE, panneau.VILLE, panneau.HABILLAGE, panneau.STATUS, panneau.ID_REGISSEUR,
			, panneau.ADRESSE, panneau.REFERENCE, regisseur.ID_REGISSEUR, regisseur.status');
			$this->db->from('panneau');
			$this->db->join('carte', 'carte.ID_PANNEAU = panneau.ID_PANNEAU ', 'left');
			$this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR', 'left');
			$this->db->where('carte.id_carte', null);
			$this->db->where( 'panneau.ID_REGISSEUR', $ID_REGISSEUR);
	    $result = $this->db->get()->result();
	    return $result;
		}
		public function save_favoris($data){
			$result=$this->db->insert('favoris',$data);
		  return true;
		}
		public function list_fav($ID_CLIENT2){
			 $this->db->select('*');
			  $this->db->from('panneau') ;
			  $this->db->join('favoris', 'favoris.ID_PANNEAU = panneau.ID_PANNEAU');
			  $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = favoris.ID_REGISSEUR') ;
			  $this->db->where('favoris.ID_CLIENT2', $ID_CLIENT2);
			  $query = $this->db->get()->result();
			 return $query;

			$query = $this->db->get();
		}
		function delete_favoris($id_favoris){
			$this->db->where('id_favoris', $id_favoris);
			$this->db->delete('favoris');
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
		function fetch_state_quartier($id_ville)
		 {
			$this->db->where('id_ville', $id_ville);
			$this->db->order_by('quartier', 'ASC');
			$query = $this->db->get('quartier');
			$output = '<option value="">Selectionner Quartier</option>';
			foreach($query->result() as $row)
			{
			 $output .= '<option value="'.$row->quartier.'">'.$row->quartier.'</option>';
			}
			return $output;
		 }
		 function fetch_country()
			{
			 $this->db->order_by("ville", "ASC");
			 $query = $this->db->get("ville");
			 return $query->result();
			}
}
