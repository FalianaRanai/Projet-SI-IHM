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
}
?>