<?php 


class Ekle extends CI_Controller{
	public Function index(){

		$this->load->model('veritabanimodeli');
		$this->load->view('Ekle');
	}
}

?>