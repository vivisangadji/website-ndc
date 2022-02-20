<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class mAlamat extends CI_Model{
	public function getAlamat(){
		return $this->db->get('alamat')->row();
	}
}