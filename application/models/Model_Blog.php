<?php
class Model_Blog extends CI_Model{

	function blog_list(){
		$hasil=$this->db->get('blog');
		return $hasil->result();
	}
	function save_blog($data){
		$result=$this->db->insert('blog',$data);
		return true;
  }

	public function getBlogById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('blog');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return false;
		}
	}

	function update_blog(){
		$id=$this->input->post('txt_hidden');
		$field = array(
			'description'		=>$this->input->post('description'),
			'titre'					=>$this->input->post('titre')
		);
		$this->db->where('id', $id);
		$this->db->update('blog', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}

	function delete_blog($id){
		$this->db->where('id', $id);
		$this->db->delete('blog');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}
	function getBlog()
  {
    $this->db->select("*");
    $this->db->from("blog");
    $result = $this->db->get()->result();
    return $result;
    }

}
