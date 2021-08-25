<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('BaseController.php');
class Login extends CI_Controller{

    public function index(){
        if(!$this->session->has_userdata('variable')){
            $this->load->helper('assets');
            $this->load->view('login');
        } else{
            var_dump($this->session->userdata('variable'));
        }
    }

    public function subscribe(){
        $this->load->model("fonctions");
        $this->load->helper('assets');
        $nom=$this->input->get("username");
        $mdp=$this->input->get("password");
        $this->fonctions->inscription($nom,$mdp);
        redirect(site_url("Template"));
    }
}
?>