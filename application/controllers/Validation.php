<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Validation extends CI_Controller{
    public function index(){
        
            //$data = array();
            //$this->load->helper('assets');
            $this->load->model('fonctions');
            //$data['view'] = "listeAchat.php";
            $this->fonctions->updateStock($this->input->post("NomProduit"),$this->input->post("quantite"),$this->input->post("stock"));
            $this->fonctions->deleteAchat($this->input->post("idAchat"));
            
            redirect('Template');

        
    }
}

?>