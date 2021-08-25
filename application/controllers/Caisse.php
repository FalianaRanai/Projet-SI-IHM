<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Caisse extends CI_Controller{
        public function index(){
            
            $this->load->helper('assets');
            $this->load->model('fonctions');
            $id=$this->input->get("idCaisse");
            $data['caisse']=$this->fonctions->getCaisse();
            $this->session->set_userdata("idCaisse",$id);
            var_dump($this->session->userdata("idCaisse"));
           
        }
    }
?>