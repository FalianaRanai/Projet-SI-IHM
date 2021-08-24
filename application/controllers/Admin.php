<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function index()
    {
        $data=array();
        $data['user']=$this->session->userdata('administrateur');
        $this->load->helper('assets');
        $this->load->view('admin',$data);
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
        $this->load->model('fonctions');
        $data['categorie']=$this->fonctions->getCategory();
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
        $this->load->model('fonctions');
        $data['categorie']=$this->fonctions->getCategory();
        $data['produit']=$this->fonctions->getProduit();
        $this->load->view('admin', $data);
    }
    public function SupprimerProduit()
    {
    	$data = array();
		$data['view'] = "SuprProduit.php";
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['categorie']=$this->fonctions->getCategory();
        $data['produit']=$this->fonctions->getProduit();
        $this->load->view('admin', $data);
    }
    public function ModifierProduit()
    {
    	$data = array();
		$data['view'] = "ModifProduit.php";
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $data['categorie']=$this->fonctions->getCategory();
        $data['produit']=$this->fonctions->getProduit();
        $this->load->view('admin', $data);
    }

    public function TraitementAjouterCategorie()
    {
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $this->fonctions->insertCategorie($this->input->post('ajoutCat'));
        redirect(site_url("Admin/AjouterCategorie"));
    }

    public function TraitementSupprimerCategorie()
    {
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $this->fonctions->deleteCategorie($this->input->get('id'));
        redirect(site_url("Admin/SupprimerCategorie"));
    }

    public function TraitementModifierCategorie()
    {
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $this->fonctions->updateCategorie($this->input->post('idCategorie'), $this->input->post('nomCategorie'));
        redirect(site_url("Admin/ModifierCategorie"));
    }

    public function TraitementAjouterProduit()
    {
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $this->fonctions->insertProduit($this->input->post('nomProduit'), $this->input->post('prix'), $this->input->post('radiocategorie'), $this->input->post('imageProduit'));
        redirect(site_url("Admin/AjouterProduit"));
    }

    public function TraitementSupprimerProduit()
    {
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $this->fonctions->deleteProduit($this->input->get('id'));
        redirect(site_url("Admin/SupprimerProduit"));
    }

    public function TraitementModifierProduit()
    {
        $this->load->helper('assets');
        $this->load->model('fonctions');
        $this->fonctions->updateProduit($this->input->post('idProduit'), $this->input->post('NomProduit'), $this->input->post('Prix'), $this->input->post('Categorie'), $this->input->post('Source'));
        redirect(site_url("Admin/ModifierProduit"));
    }
}
?>