<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regisseur extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        $ID_REGISSEUR = $this->session->userdata('ID_REGISSEUR');


          return $ID_REGISSEUR;
          function panneaulist($ID_REGISSEUR){
            $this->db->select('*');
            $this->db->from('panneau');
            $this->db->where('ID_REGISSEUR' ,$ID_REGISSEUR);
            $result = $this->db->get()->result();
            return $result;
          }
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
      $this->db->select("*");
      $this->db->from("panneau");
      $this->db->where('ID_REGISSEUR');
      $result = $this->db->get()->result();
      return $result;
      }
      public function update_regisseur(){
        $ID_REGISSEUR=$this->input->post('txt_hidden');
        $field = array(
          'ENTREPRISE'		      =>$this->input->post('ENTREPRISE'),
          'MOT_DE_PASS'		      =>$this->input->post('MOT_DE_PASS'),
          'ADRESSE'		          =>$this->input->post('ADRESSE'),
          'CONTACT_REGISSEUR'		=>$this->input->post('CONTACT_REGISSEUR'),
          'EMAIL_REGISSEUR'			=>$this->input->post('EMAIL_REGISSEUR')
        );
        $this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
        $this->db->update('regisseur', $field);
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
      public function getCarteById($ID_REGISSEUR){
        $this->db->where('ID_REGISSEUR', $ID_REGISSEUR);
        $hasil=$this->db->get('carte');
        return $hasil->result();
        /*$this->db->select('*');
        $this->db->from('carte');
        $this->db->where('panneau', 'carte.ID_REGISSEUR = panneau.ID_REGISSEUR', $ID_REGISSEUR);

        $query = $this->db->get();
        return $query->result();*/
      }
      public function update_status(){
        $id_carte = $_REQUEST['$id_carte'];
        $status = $_REQUEST['$status'];
        if ($status == 1) {
          $status = 0;
        }else {
          $status = 1;
        }
        $data = array('status_carte' => $status);
        $this->db->where('id_carte', $id_carte);
        return $this->db->update('carte', $data);
      }
      public function delete_carte($id_carte){
        $this->db->where('id_carte', $id_carte);
        $this->db->delete('carte');
        if ($this->db->affected_rows() > 0) {
          return true;
        }else {
          return false;
        }
      }
      public function cherche($MOT_CLES){
        $this->db->like('MOT_CLES', $MOT_CLES);
        $data = $this->db->get('panneau');
        return $data->result();
      }
      public function recup($ID_REGISSEUR){
        /*SELECT * FROM carte, panneau where panneau.ID_PANNEAU = carte.ID_PANNEAU AND carte.ID_REGISSEUR = 2*/
        $this->db->select('*');
        $this->db->from('carte, panneau');
        $this->db->where('carte.ID_PANNEAU = panneau.ID_PANNEAU AND carte.ID_REGISSEUR = ', $ID_REGISSEUR);


        $query = $this->db->get();
        return $query->result();
      }
}
