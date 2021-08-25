<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller{
    public function index()
    {
		$data = array();
		$data['view'] = "acceuil.php";
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['produit']=$this->fonctions->getProduit();
        $data['caisse']=$this->fonctions->getCaisse();
        $data['home']= 1;
        $this->session->set_userdata($this->input->get("idCaisse"));
        $this->load->view('template', $data);
        
    }
    public function login(){
        $data=array();
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $data['caisse']=$this->fonctions->getCaisse();
        if($this->fonctions->checkAdmin($username,$password)!=NULL){
            $this->session->set_userdata("administrateur",$username);
            redirect(site_url("Admin"));
        }
        else if($this->fonctions->checkUser($username,$password)!=NULL){
            $this->session->set_userdata("utilisateur",$username);
            redirect(site_url("Template"));
        }
        redirect(site_url("Login"));
        //var_dump($this->session->userdata('administrateur'));
    }
    public function singleProduct()
    {
        $data = array();
        $data['view'] = "single-product.php";
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['caisse']=$this->fonctions->getCaisse();
        $data['produit']=$this->fonctions->findProduit($this->input->get('id'));
        $data['category']=$this->fonctions->findProduitByCat($data['produit'][0]['IDCategorie']);
        $data['nomCategory']=$this->fonctions->getCategoryId($data['produit'][0]['IDProduit']);
        $this->load->view('template', $data);
        
    }
    public function pageProduit()
    {
        $data = array();
        $data['caisse']=$this->fonctions->getCaisse();
        $data['view'] = "products.php";
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['produit']=$this->fonctions->getProduit();
        $data['products']= 1;
        $this->load->view('template', $data);
    }
<<<<<<< Updated upstream
=======

    public function checkAchat(){
        if($this->session->userdata("utilisateur")!=NULL){
            $data=array();
            $this->load->helper('assets');
            $this->load->model('fonctions');
            //$this->load->view('Achat',$data);
            $data['sommeCaisse']=$this->fonctions->getSommeCaisse(1);
            //$data['sommeCaisse']=$this->fonctions->getSommeCaisse(1);
            echo $data['sommeCaisse'][0]['somme'];
            echo "azerty";
        }else{
            redirect(site_url("Login"));
        }
    }
>>>>>>> Stashed changes
}
?>