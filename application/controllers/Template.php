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
        $data['admin']=$this->fonctions->checkAdmin($username,$password);
        $data['utilisateur']=$this->fonctions->checkUser($username,$password);
        if($data['admin']!=NULL){
            redirect(site_url("Admin"));
        }else if($data['utilisateur'])!=NULL){
            redirect(site_url("Template"));
        }
    }
}
?>