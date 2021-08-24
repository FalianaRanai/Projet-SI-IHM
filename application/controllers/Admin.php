<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function index()
    {
        $this->load->helper('assets');
        $this->load->view('admin');
    }
    public function AjouterCategorie()
    {
    	$data = array();
		$data['view'] = "AjoutCategorie.php";
        $this->load->helper('assets');
        $this->load->view('admin', $data);
    }
    public function ModifierCategorie()
    {
    	$data = array();
		$data['view'] = "ModifCategorie.php";
        $this->load->helper('assets');
        $this->load->view('admin', $data);
    }
    public function SupprimerCategorie()
    {
    	$data = array();
		$data['view'] = "SuprCategorie.php";
        $this->load->model('fonctions');
        $data['categorie']=$this->fonctions->getCategory();
        $this->load->helper('assets');
        $this->load->view('admin', $data);
    }
    public function AjouterProduit()
    {
    	$data = array();
		$data['view'] = "AjoutProduit.php";
        $this->load->helper('assets');
        $this->load->view('admin', $data);
    }
    public function SupprimerProduit()
    {
    	$data = array();
		$data['view'] = "SuprProduit.php";
        $this->load->helper('assets');
        $this->load->view('admin', $data);
    }
    public function ModifierProduit()
    {
    	$data = array();
		$data['view'] = "ModifProduit.php";
        $this->load->helper('assets');
        $this->load->view('admin', $data);
    }
}
?>