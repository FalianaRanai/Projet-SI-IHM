<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achat extends CI_Controller{
    public function index(){
        if($this->session->userdata("utilisateur")!=NULL){
            $data = array();
            $this->load->helper('assets');
            $this->load->model('fonctions');
            $data['view'] = "listeAchat.php";
            $data['caisse']=$this->fonctions->getCaisse();
            $data['nomProduit']=$this->fonctions->getNomProduit($this->session->userdata("idCaisse"));
            $data['achat']=$this->fonctions->getAchatCaisse($this->session->userdata("idCaisse"));
            $this->load->view('template',$data);
            }else{
                redirect(site_url("Login"));
            }
    }
}
?>