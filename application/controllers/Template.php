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
        $data['admin']=$this->fonctions->checkAdmin('root','azerty');
        $this->load->view('template', $data);
        
    }
    public function login(){
        $data=array();
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        if($this->fonctions->checkAdmin($username,$password)!=NULL){
            $this->session->set_userdata("administrateur",$username);
            redirect(site_url("Admin"));
        }
        if($this->fonctions->checkUser($username,$passowrd)!=NULL){
            $this->session->set_userdata("utilisateur",$username);
            redirect(site_url("Template"));
        }
        redirect(site_url("Login"));
        //var_dump($this->session->userdata('administrateur'));
    }
}
?>