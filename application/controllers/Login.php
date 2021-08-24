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
}
?>