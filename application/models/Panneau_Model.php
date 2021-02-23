<?php
  class Panneau_Model extends CI_Model {

  public function __construct() {
  parent::__construct();
  $this->load->database();
  }
  function getInfos()
  {
    $this->db->select('panneau.ID_PANNEAU, panneau.TYPE, panneau.SERVICE, panneau.FACE, panneau.LUMIERE, panneau.INFO, panneau.LARGEUR, panneau.LONGUEUR, panneau.LOGITUDE, panneau.LATITUDE, panneau.VILLE, panneau.HABILLAGE, panneau.STATUS, panneau.ID_REGISSEUR,
    regisseur.ID_REGISSEUR, regisseur.status');
    $this->db->from('panneau');
    $this->db->join('carte', 'carte.ID_PANNEAU = panneau.ID_PANNEAU ', 'left');
    $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR', 'left');
    $this->db->where('carte.id_carte', null);
    $result = $this->db->get()->result();
    return $result;
    }
    function recuperation_details($ID_PANNEAU){
      $this->db->where("ID_PANNEAU",$ID_PANNEAU);
      $query = $this->db->get("panneau");
      return $query;
    }
    public function find_item($ID_PANNEAU){
      return $this->$db->get_where('items', array('ID_PANNEAU' => $ID_PANNEAU))->row();
    }
    public function getPanneauById($ID_PANNEAU){
  		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
  		$query = $this->db->get('panneau');
  		if ($query->num_rows() > 0) {
  			return $query->row();
  		}else {
  			return false;
  		}
  	}

  	function update_panneau(){
  		$ID_PANNEAU=$this->input->post('txt_hidden');
  		$field = array(
  			'TYPE'		     =>$this->input->post('TYPE'),
  			'SERVICE'		   =>$this->input->post('SERVICE'),
  			'FACE'		     =>$this->input->post('FACE'),
  			'LUMIERE'		   =>$this->input->post('LUMIERE'),
  			'PERIODE'		   =>$this->input->post('PERIODE'),
  			'LARGEUR'	     =>$this->input->post('LARGEUR'),
  			'LONGUEUR'		 =>$this->input->post('LONGUEUR'),
  			'LOGITUDE'		 =>$this->input->post('LOGITUDE'),
  			'LATITUDE'		 =>$this->input->post('LATITUDE'),
  			'VILLE'		     =>$this->input->post('VILLE'),
  			'REFERENCE'		 =>$this->input->post('REFERENCE'),
  			'ADRESSE'		   =>$this->input->post('ADRESSE'),
  			'DESCRIPTION'	 =>$this->input->post('DESCRIPTION'),
  			'HABILLAGE'		 =>$this->input->post('HABILLAGE'),
  			'ID_REGISSEUR' =>$this->input->post('ID_REGISSEUR'),
  			'STATUS'			 =>$this->input->post('STATUS')
  		);
  		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
  		$this->db->update('panneau', $field);
  		if ($this->db->affected_rows() > 0) {
  			return true;
  		}else {
  			return false;
  		}
  	}

  	function delete_panneau($ID_PANNEAU){
  		$this->db->where('ID_PANNEAU', $ID_PANNEAU);
  		$this->db->delete('panneau');
  		if ($this->db->affected_rows() > 0) {
  			return true;
  		}else {
  			return false;
  		}
  	}

}
