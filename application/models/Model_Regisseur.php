<?php
class Model_Regisseur extends CI_Model{

	function regisseur_list(){
		$hasil=$this->db->get('regisseur');
		return $hasil->result();
	}
  function save_regisseur($data){
  $result=$this->db->insert('regisseur',$data);
  return true;
  }

  	function update_regisseur(){
  		$ID_REGISSEUR       = $this -> input  -> post('ID_REGISSEUR');
  		$ENTREPRISE      		= $this -> input  -> post('ENTREPRISE');
  		$CONTACT_REGISSEUR  = $this -> input  -> post('CONTACT_REGISSEUR');
  		$EMAIL_REGISSEUR    = $this -> input  -> post('EMAIL_REGISSEUR');
  		$TYPE_ABONNEMENT    = $this -> input  -> post('TYPE_ABONNEMENT');
  		$PAYMENT    				= $this -> input  -> post('PAYMENT');
  		$LOGO    						= $this -> input  -> post('LOGO');
  		$MOT_DE_PASS        = $this -> input  -> post('MOT_DE_PASS');

      $this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
  		$this->db->set('ENTREPRISE', $ENTREPRISE);
  		$this->db->set('CONTACT_REGISSEUR', $CONTACT_REGISSEUR);
  		$this->db->set('EMAIL_REGISSEUR', $EMAIL_REGISSEUR);
  		$this->db->set('$TYPE_ABONNEMENT', $TYPE_ABONNEMENT);
  		$this->db->set('$PAYMENT', $PAYMENT);
  		$this->db->set('$LOGO', $LOGO);
  		$this->db->set('MOT_DE_PASS', $MOT_DE_PASS);

  		$result=$this->db->update('regisseur');

  		return $result;
  	}

	function regisseury($ID_REGISSEUR){
		return $this->db->select('*')
						->from('regisseur')
						->where('ID_REGISSEUR',$ID_REGISSEUR)
						->get()
						->result_array();
	}

  function save_panneau($data){

  $result=$this->db->insert('panneau',$data);
  return true;
	}
	public function update_status(){
		$ID_REGISSEUR = $_REQUEST['$ID_REGISSEUR'];
		$status = $_REQUEST['$status'];
		if ($status == 1) {
			$status = 0;
		}else {
			$status = 1;
		}
		$data = array('status' => $status);
		$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
		return $this->db->update('regisseur', $data);
	}

	function delete_regisseur($ID_REGISSEUR){
		$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
		$this->db->delete('regisseur');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}
	public function getRegisseurById($ID_REGISSEUR){
		/*$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
		$query = $this->db->get('panneau');
		if ($query->num_rows() < 0) {
			return $query->row();
		}else {
			return false;
		}*/
		$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
		$hasil=$this->db->get('panneau');
		return $hasil->result();

	}

	public function update_status_panneau(){
		$ID_PANNEAU = $_REQUEST['$ID_PANNEAU'];
		$status = $_REQUEST['$status'];
		if ($status == 1) {
			$status = 0;
		}else {
			$status = 1;
		}
		$data = array('STATUS' => $status);
		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
		return $this->db->update('panneau', $data);
	}
	public function update_verifier_panneau(){
		$ID_PANNEAU = $_REQUEST['$ID_PANNEAU'];
		$status = $_REQUEST['$status'];
		if ($status == 1) {
			$status = 0;
		}else {
			$status = 1;
		}
		$data = array('verifier' => $status);
		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
		return $this->db->update('panneau', $data);
	}
	public function update_type(){
		$ID_REGISSEUR = $_REQUEST['$ID_REGISSEUR'];
		$status = $_REQUEST['$status'];
		if ($status == 1) {
			$status = 0;
		}else {
			$status = 1;
		}
		$data = array('etat' => $status);
		$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
		return $this->db->update('regisseur', $data);
	}

	function fetch_country()
	 {
	  $this->db->order_by("type", "ASC");
	  $query = $this->db->get("type");
	  return $query->result();
	 }

	function getVille(){
		$this->db->order_by("ville", "ASC");
		$query = $this->db->get("ville");
		return $query->result();
	}

	 function fetch_state($id_type)
	  {
	   $this->db->where('id_type', $id_type);
	   $this->db->order_by('sous', 'ASC');
	   $query = $this->db->get('sous_type');
	   $output = '<option value="">Selectionner Sous-type</option>';
	   foreach($query->result() as $row)
	   {
	    $output .= '<option value="'.$row->sous.'">'.$row->sous.'</option>';
	   }
	   return $output;
	  }
		public function getClientByIDE($ID_CLIENT2){
      $this->db->where('ID_CLIENT2', $ID_CLIENT2);
      $query = $this->db->get('client');
      if($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
		public function save_pro($data){
			$result=$this->db->insert('professionnel',$data);
			return true;
		}
		public function ajout_debut(){
			$id_carte=$this->input->post('txt_hidden');
			$field = array(
				'debut'		=>$this->input->post('debut'),
				'fin'					=>$this->input->post('fin')
			);
			$this->db->where('id_carte', $id_carte);
			$this->db->update('carte', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
		public function historique(){
			$id_carte=$this->input->post('txt_hidden');
			$ID_PANNEAU=$this->input->post('txt_hidden2');
			$ID_CLIENT2=$this->input->post('txt_hidden1');
			$ID_REGISSEUR=$this->input->post('txt_hidden3');
			$field = array(
				'debut'		=>$this->input->post('debut'),
				'fin'					=>$this->input->post('fin'),
				'id_carte' =>$id_carte,
				'ID_PANNEAU' =>$ID_PANNEAU,
				'ID_CLIENT2' =>$ID_CLIENT2,
				'ID_REGISSEUR' =>$ID_REGISSEUR
			);
			$this->db->insert('historique', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
		public function disponible_panneau($ID_REGISSEUR){
			$this->db->select('panneau.ID_PANNEAU, panneau.TYPE, panneau.DESCRIPTION, panneau.ANNUEL, panneau.SEMESTRIEL, panneau.TAXE, panneau.Impression, panneau.MENSUEL, panneau.MOT_CLES, panneau.SERVICE, panneau.FACE, panneau.LUMIERE, panneau.INFO, panneau.LARGEUR, panneau.LONGUEUR, panneau.LOGITUDE, panneau.LATITUDE, panneau.VILLE, panneau.HABILLAGE, panneau.STATUS, panneau.ID_REGISSEUR,
			regisseur.ID_REGISSEUR, panneau.REFERENCE, panneau.ADRESSE,regisseur.status');
			$this->db->from('panneau');
			$this->db->join('carte', 'carte.ID_PANNEAU = panneau.ID_PANNEAU ', 'left');
			$this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR', 'left');
			$this->db->where('carte.id_carte', null);
			$this->db->where( 'panneau.ID_REGISSEUR', $ID_REGISSEUR);
			$result = $this->db->get()->result();
			return $result;
		}
public function list_client(){
	$hasil=$this->db->get('client');
	return $hasil->result();
}
public function historiques($ID_REGISSEUR){
	$this->db->select('*');
	$this->db->from('historique');
	$this->db->join('client', 'historique.ID_CLIENT2 = client.ID_CLIENT2');
	$this->db->where('historique.ID_REGISSEUR', $ID_REGISSEUR);
	$result = $this->db->get()->result();
	return $result;
	}
	public function getProById($ID_REGISSEUR){
		$this->db->select('*');
		$this->db->from('professionnel');
		$this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
		$result = $this->db->get()->result();
		return $result;
	}
	public function getByRecup($ID_PANNEAU){
		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
		$query = $this->db->get('panneau');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return false;
		}
	}
	public function update_gerer(){
		$ID_PANNEAU = $_REQUEST['$ID_PANNEAU'];
		$gerer = $_REQUEST['$gerer'];
		if ($gerer == 1) {
			$gerer = 0;
		}else {
			$gerer = 1;
		}
		$data = array('gerer' => $gerer);
		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
		return $this->db->update('panneau', $data);
	}

}
