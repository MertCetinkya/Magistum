<?php 

class veritabanimodeli extends CI_Model{

	public function __construct(){

		parent::__construct();
		$this->load->database();
	}

	public function ekle($formdata){

		return $this->db->insert('bilgiler', $formdata);
	}

	public function getir($username,$password){

		$query = $this->db->like("UserName", $username)->where("Password", $password)->get('bilgiler');
		return $query->result();
	}

	public function ListeGetir($deneme){

		$query = $this->db->from("liste")->where("Id", $deneme)->get();
		return $query->result();
	}

	public function islerigetir(){

		$query = $this->db->get('liste');
		return $query->result();
	}
	public function DeleteOperation($sirano){
		$this->db->where('Id', $sirano);
		$this->db->delete('liste');
		return True;
	}
	public function UpdateOperation($sirano, $tanim,$aciklama,$state){
		$data = array(
			'Tanim'=>$tanim,
			'Aciklama'=>$aciklama,
			'state'=>$state
		);
		$this->db->set($data)->where("Id", $sirano)->update("liste", $data);
		return True;
	}
	public function GetState($sirano){

		$query = $this->db->from("liste")->where("Id",$sirano)->get();

		return $query->result();
	}

	public function Yekle($ek){
			return $this->db->insert('liste', $ek);

	}
}

?>