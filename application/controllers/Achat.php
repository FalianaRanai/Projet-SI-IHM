<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achat extends CI_Controller{
    public function index(){
        $data=array();
        $this->load->helper('assets');
        $this->load->model('fonctions');
        //$this->load->view('Achat',$data);
        $data['sommeCaisse']=$this->fonctions->getSommeAll();
        //$data['sommeCaisse']=$this->fonctions->getSommeCaisse(1);
        echo $data['sommeCaisse'][0]['somme'];
        echo "azerty";
    }
}
?>