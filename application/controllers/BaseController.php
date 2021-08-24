<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class BaseController extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         * 		http://example.com/index.php/Load
         *	- or -
         * 		http://example.com/index.php/Load/index
         *	- or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/Load/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            
            var_dump($this->session->userdata('administrateur'));
            //redirect(site_url("Login"));
            /*if(!$this->session->has_userdata('administrateur')){
                redirect(site_url());
                //echo site_url();
            }else{
                redirect(site_url("Admin"));
            }*/
    
           
        }
    }
?>