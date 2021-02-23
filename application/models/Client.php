<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('ID_CLIENT2');
    }

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
    function getInfos()
    {
      $this->db->select('panneau.ID_PANNEAU, panneau.image_panneau, panneau.TYPE, panneau.SERVICE, panneau.FACE, panneau.LUMIERE, panneau.INFO, panneau.LARGEUR, panneau.LONGUEUR, panneau.LOGITUDE, panneau.LATITUDE, panneau.VILLE, panneau.HABILLAGE, panneau.STATUS, panneau.ID_REGISSEUR,
      regisseur.ID_REGISSEUR, regisseur.status');
      $this->db->from('panneau');
      $this->db->join('carte', 'carte.ID_PANNEAU = panneau.ID_PANNEAU ', 'left');
      $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR', 'left');
      $this->db->where('carte.id_carte', null);
      $result = $this->db->get()->result();
      return $result;
      }
    function getAnnuaire(){
      $this->db->select("*");
      $this->db->from("regisseur");
      $result = $this->db->get()->result();
      return $result;
    }

    public function getPanneauById($ID_REGISSEUR){
      $this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
      $query = $this->db->get('regisseur');
      if($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
    public function getMes($ID_CLIENT2){
      //$this->db->select('*');
      //$this->db->from('carte, panneau');
      //$this->db->where('carte.ID_PANNEAU = panneau.ID_PANNEAU AND carte.ID_CLIENT2 = ', $ID_CLIENT2);
      $this->db->select('*');
			$this->db->from('carte');
			$this->db->join('panneau', 'panneau.ID_PANNEAU = carte.ID_PANNEAU');
			$this->db->where('carte.ID_CLIENT2 =', $ID_CLIENT2);
      $query = $this->db->get();
      return $query->result();
    }
    public function cherche($VILLE, $TYPE, $etat_regisseur){
      $this->db->select('*');
       $this->db->from('panneau') ;
       $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR');
       $this->db->where('panneau.TYPE', $TYPE);
       $this->db->where('panneau.ADRESSE', $VILLE);
       $this->db->where('regisseur.etat', $etat_regisseur);
       $query = $this->db->get()->result();
      return $query;

    }
    public function cherche_ville($ville, $TYPE, $etat_regisseur){
      $this->db->select('*');
       $this->db->from('panneau') ;
       $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR');
       $this->db->join('ville', 'ville.ville = panneau.VILLE');
       $this->db->where('panneau.TYPE', $TYPE);
       $this->db->where('ville.id', $ville);
       $this->db->where('regisseur.etat', $etat_regisseur);
       $query = $this->db->get()->result();
      return $query;

    }
    public function cherche_ville_type_only($ville, $type, $etat_regisseur){
      $this->db->select('*');
       $this->db->from('panneau') ;
       $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR');
       $this->db->join('ville', 'ville.ville = panneau.VILLE');
       $this->db->join('sous_type','sous_type.sous = panneau.TYPE');
      //  $this->db->where('panneau.TYPE', $type);
       $this->db->where('sous_type.id_type',$type);
       $this->db->where('ville.id', $ville);
       $this->db->where('regisseur.etat', $etat_regisseur);
       $query = $this->db->get()->result();
      return $query;

    }

    public function cherche_ville_only($VILLE, $type, $etat_regisseur){
      $this->db->select('*');
       $this->db->from('panneau') ;
       $this->db->join('regisseur', 'regisseur.ID_REGISSEUR = panneau.ID_REGISSEUR');
      //  $this->db->join('ville', 'ville.ville = panneau.VILLE');
       $this->db->join('sous_type','sous_type.sous = panneau.TYPE');
      //  $this->db->where('panneau.TYPE', $type);
       $this->db->where('sous_type.id_type',$type);
      //  $this->db->where('ville.id', $ville);
      $this->db->where('panneau.ADRESSE', $VILLE);
       $this->db->where('regisseur.etat', $etat_regisseur);
       $query = $this->db->get()->result();
      return $query;

    }
}
