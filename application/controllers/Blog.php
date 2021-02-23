<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Blog');
		$this->load->library('upload');
	}
	function index(){
		$data['blogs']=$this->Model_Blog->blog_list();
		$this->load->view('blog_view', $data);
	}

	function blog_data(){
		$data=$this->Model_Blog->blog_list();
		echo json_encode($data);
	}

	function save(){
		//$data=$this->Model_Blog->save_blog();
		//echo json_encode($data);
		//$this->load->view('blog_view');
						$titre 	   		 = $this->input->post('titre');
						$id 	   		 = $this->input->post('id');
						$resume   = $this->input->post('resume');
						$description  	 = $this->input->post('description');

						$config = array(
							'upload_path' => './upload' ,
							'allowed_types' => 'jpg|png|jpeg|gif' ,
							'max_size' => '4000',
							'encrypt_name' => TRUE ,
						);

					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_blog')) {
							echo $this->upload->display_errors();
						}else{
							$fd= $this->upload->data();
							$fn=$fd['file_name'];
							$data = array(
								'id'       => $id,
								'titre' 	   		 => $titre,
								'resume'  => $resume,
								'description'  	 => $description,
								'image_blog'   		 				 => $fn
							);
							$this->Model_Blog->save_blog($data);
							$blogs['blogs']=$this->Model_Blog->blog_list();
							$this->load->view('blog_view', $blogs);
						}
	}

	public function edit($id){
		$data['blog'] = $this->Model_Blog->getBlogById($id);
		$this->load->view('edit_blog', $data);
	}
	public function update(){
		$data = $this->Model_Blog->update_blog();
		echo json_encode($data);
		$blogs['blogs']=$this->Model_Blog->blog_list();
		$this->load->view('blog_view', $blogs);
	}
	public function delete($id){
		$data = $this->Model_Blog->delete_blog($id);
		$blogs['blogs']=$this->Model_Blog->blog_list();
		$this->load->view('blog_view', $blogs);
	}

	function blog(){
		$data["blogs"]= $this->Model_Blog->getBlog();
		$this->load->view('blog_liste', $data);
	}
	function blog_client(){
		$data["blogs"]= $this->Model_Blog->getBlog();
		$this->load->view('blog_client', $data);
	}
	function plus_blog($id){
		$data['blog'] = $this->Model_Blog->getBlogById($id);
		$this->load->view('plus_blog', $data);
	}
}
