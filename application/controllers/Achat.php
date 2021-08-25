<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achat extends CI_Controller{
    public function index(){
        $data=array();
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['view'] = "listeAchat.php";
        $data['caisse']=$this->fonctions->getCaisse();
        $this->load->view('template',$data);
    }
}
?>