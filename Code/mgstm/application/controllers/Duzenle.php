<?php 


class Duzenle extends CI_Controller{
	
	public function index(){
		
		$this->load->model('veritabanimodeli');
		$this->load->view('Duzenle');
	}
}

?>