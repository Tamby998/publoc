<?php
 class Panneau extends  CI_Controller
{
public $panneau;
public function __construct() {
  parent::__construct();
  $this->load->model("Panneau_Model");
}
public function index(){
  $data["infos"]=$this->Panneau_Model->getInfos();
  $this->load->view("panneau",$data);
  }
  public function show($ID_PANNEAU){
    $item = $this->panneau->find_item($ID_PANNEAU);
    $this->load->view('details_panneau', array('item'=>$item));
  }

}
