<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achat extends CI_Controller{
    public function index(){
        if($this->session->userdata("utilisateur")!=NULL){
            $data = array();
            $this->load->helper('assets');
            $this->load->model('fonctions');

            $session=$this->session->userdata("idCaisse");
            $idproduit=$this->input->get("idProduit");
            $quantite=$this->input->get("quantity");
            
            $this->fonctions->insertAchate($session,$idproduit,$quantite,1);


            $data['view'] = "listeAchat.php";
            $data['caisse']=$this->fonctions->getCaisse();
            $data['nomProduit']=$this->fonctions->getNomProduit($this->session->userdata("idCaisse"));
            $data['achat']=$this->fonctions->getAchatCaisse($this->session->userdata("idCaisse"));
            $data['panierAchat'] = 1;
            $this->load->view('template',$data);
            }else{
                redirect(site_url("Login"));
            }
    }

    public function panier()
    {
        $data = array();
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['view'] = "Panier.php";
        $data['liste'] = $this->fonctions->getBasket();
        $data['caisse']=$this->fonctions->getCaisse();
        $data['panierAchat'] = 1;
        $this->load->view('template',$data);
    }
}
?>