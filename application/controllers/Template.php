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
        $this->load->library('session');
        $this->session->set_userdata('administrateur',$username);
        $data['usser']=$this->session->set_userdata('administrateur',$username);
        $this->session->set_userdata('user',$username);
        redirect(site_url("BaseController"));
        //var_dump($this->session->userdata('administrateur'));
    }
}
?>