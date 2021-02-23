<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestataire extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('ID_PRESTATAIRE');
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
    public function update_prestataire(){
      $ID_PRESTATAIRE=$this->input->post('txt_hidden');
      $field = array(
        'NOM_PRESTATAIRE'		    =>$this->input->post('NOM_PRESTATAIRE'),
        'MOT_DE_PASS'		        =>$this->input->post('MOT_DE_PASS'),
        'CONTACT_PRESTATAIRE'		=>$this->input->post('CONTACT_PRESTATAIRE'),
        'EMAIL_PRESTATAIRE'			=>$this->input->post('EMAIL_PRESTATAIRE')
      );
      $this->db->where('ID_PRESTATAIRE', $ID_PRESTATAIRE);
      $this->db->update('prestataire', $field);
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function list_demandes(){
      $hasil=$this->db->get('demande');
      return $hasil->result();
    }
}
