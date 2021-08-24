<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Load extends CI_Controller{
    public function __construct(){
		parent::__construct();
	}
    public function Detruire(){
		$this->session->sess_destroy();
		redirect(site_url());
	}
}
?>