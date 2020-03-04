<?php

class Register extends CI_Controller{

	public function index(){ //Because of view only work in function
		
		$this->load->view('Register');//Called View
		//echo "Controller page";
	}
}
?>