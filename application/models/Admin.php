<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('ID');
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
    public function save_types(){
      $data = array(
          'id' 						=> $this->input->post('id'),
          'type' 				=> $this->input->post('type'),
        );
      $result=$this->db->insert('type',$data);
      return $result;
    }
    public function type_list(){
      $hasil=$this->db->get('type');
      return $hasil->result();
    }
    public function getTypeById($id){
      $this->db->where('id', $id);
      $query = $this->db->get('type');
      if ($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
    public function update_type(){
      $id=$this->input->post('txt_hidden');
      $field = array(
        'type'	=>$this->input->post('type')
      );
      $this->db->where('id', $id);
      $this->db->update('type', $field);
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function delete_type($id){
      $this->db->where('id', $id);
      $this->db->delete('type');
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }


    public function type_ville(){
      $hasil=$this->db->get('ville');
      return $hasil->result();
    }
    public function getVilleById($id){
      $this->db->where('id', $id);
      $query = $this->db->get('ville');
      if ($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
    public function update_ville(){
      $id=$this->input->post('txt_hidden');
      $field = array(
        'ville'	=>$this->input->post('ville')
      );
      $this->db->where('id', $id);
      $this->db->update('ville', $field);
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function delete_ville($id){
      $this->db->where('id', $id);
      $this->db->delete('ville');
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function save_ville(){
      $data = array(
          'id' 						=> $this->input->post('id'),
          'ville' 				=> $this->input->post('ville'),
        );
      $result=$this->db->insert('ville',$data);
      return $result;
    }
    public function type_sous(){
      $hasil=$this->db->get('sous_type');
      return $hasil->result();
    }
    public function save_sous(){
      $data = array(
          'id' 						=> $this->input->post('id'),
          'sous' 				=> $this->input->post('sous'),
          'id_type' 				=> $this->input->post('id_type'),
        );
      $result=$this->db->insert('sous_type',$data);
      return $result;
    }
    public function getSousById($id){
      $this->db->where('id', $id);
      $query = $this->db->get('sous_type');
      if ($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
    public function update_sous(){
      $id=$this->input->post('txt_hidden');
      $field = array(
        'sous'	=>$this->input->post('sous')
      );
      $this->db->where('id', $id);
      $this->db->update('sous_type', $field);
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function delete_sous($id){
      $this->db->where('id', $id);
      $this->db->delete('sous_type');
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function save_quartier(){
      $data = array(
          'id' 						=> $this->input->post('id'),
          'quartier' 				=> $this->input->post('quartier'),
          'id_ville' 				=> $this->input->post('id_ville'),
        );
      $result=$this->db->insert('quartier',$data);
      return $result;
    }
    public function quartier(){
      $hasil=$this->db->get('quartier');
      return $hasil->result();
    }
    public function getQuartierById($id){
      $this->db->where('id', $id);
      $query = $this->db->get('quartier');
      if ($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
    public function update_quartier(){
      $id=$this->input->post('txt_hidden');
      $field = array(
        'quartier'	=>$this->input->post('quartier')
      );
      $this->db->where('id', $id);
      $this->db->update('quartier', $field);
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function delete_quartier($id){
      $this->db->where('id', $id);
      $this->db->delete('quartier');
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function service(){
      $hasil=$this->db->get('service_presta');
      return $hasil->result();
    }
    public function save_service(){
      $data = array(
          'id_prestataire' 						=> $this->input->post('id_prestataire'),
          'service' 				=> $this->input->post('service'),
        );
      $result=$this->db->insert('service_presta',$data);
      return $result;
    }
    public function getServiceById($id_prestataire){
      $this->db->where('id_prestataire', $id_prestataire);
      $query = $this->db->get('service_presta');
      if ($query->num_rows() > 0) {
        return $query->row();
      }else {
        return false;
      }
    }
    public function update_service(){
      $id_prestataire=$this->input->post('txt_hidden');
      $field = array(
        'service'	=>$this->input->post('service')
      );
      $this->db->where('id_prestataire', $id_prestataire);
      $this->db->update('service_presta', $field);
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
    public function delete_service($id_prestataire){
      $this->db->where('id_prestataire', $id_prestataire);
      $this->db->delete('service_presta');
      if ($this->db->affected_rows() > 0) {
        return true;
      }else {
        return false;
      }
    }
}
