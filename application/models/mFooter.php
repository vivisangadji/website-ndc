<?php 

class mFooter extends CI_Model {

	/*######################## Service Footer ##########################*/
	public function getService(){
		return $this->db->get('service')->result();
	}

	public function getDataServiceById($id){
		return $this->db->get_where('service', ['id' => $id])->row();
	}

	public function tambahService(){
		$data = [
			'judul_service' => htmlspecialchars($this->input->post('service', true))
		];

		$this->db->insert('service', $data);
	}

	public function ubahDataService($id){
		$data = [
			'judul_service' => htmlspecialchars($this->input->post('service', true))
		];

		$this->db->where('id', $id);
		$this->db->update('service', $data);
	}

	public function hapusDataService($id){
		$this->db->where('id', $id);
		$this->db->delete('service');
	}
	/*######################## End Service Footer ##########################*/



	/*######################## Konsentrasi Footer ##########################*/
	public function getKonsentrasi(){
		return $this->db->get('konsentrasi')->result();
	}

	public function getKonsentrasiById($id){
		return $this->db->get_where('konsentrasi', ['id' => $id])->row();
	}

	public function tambahKonsentrasi(){
		$data = [
			'nama' => htmlspecialchars($this->input->post('konsentrasi', true))
		];

		$this->db->insert('konsentrasi', $data);
	}

	public function ubahKonsentrasi($id){
		$data = [
			'nama' => htmlspecialchars($this->input->post('konsentrasi', true))
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('konsentrasi', $data);
	}

	public function hapusKonsentrasi($id){
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('konsentrasi');
	}
	/*######################## End Konsentrasi Footer ##########################*/



	/*######################## Divisi Footer ##########################*/
	public function getDivisi(){
		return $this->db->get('divisi')->result();
	}

	public function getDivisiById($id){
		return $this->db->get_where('divisi', ['id' => $id])->row();
	}

	public function tambahDivisi(){
		$data = [
			'nama_divisi' => htmlspecialchars($this->input->post('divisi', true))
		];

		$this->db->insert('divisi', $data);
	}

	public function ubahDivisi($id){
		$data = [
			'nama_divisi' => htmlspecialchars($this->input->post('divisi', true))
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('divisi', $data);
	}

	public function hapusDivisi($id){
		$this->db->where('id', $id);
		$this->db->delete('divisi');
	}
	/*######################## End Divisi Footer ##########################*/



	/*######################## Kontak & Medsos Footer ##########################*/
	public function getAllKontakMedsos(){ // untuk get data page admin
		return $this->db->get('kontak_sosmed')->result();
	}

	public function getKontak(){	// get data kontak untuk footer public
		$this->db->limit(2, 'ASC');
		return $this->db->get('kontak_sosmed')->result();
	}

	public function getMedsos(){  // get data medsos untuk footer public
		$this->db->order_by('id', 'ASC');
		$this->db->limit(3,2);
		return $this->db->get('kontak_sosmed')->result();
	}

	public function getKontakMedsosById($id){
		return $this->db->get_where('kontak_sosmed', ['id' => $id])->row();
	}

	public function tambahKontakMedsos(){
		$data = [
			'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
			'icon_class'=> htmlspecialchars($this->input->post('icon', true)),
			'url'		=> htmlspecialchars($this->input->post('url', true))
		];

		$this->db->insert('kontak_sosmed', $data);
	}

	public function ubahKontakMedsos($id){
		$data = [
			'nama' 		 => htmlspecialchars($this->input->post('nama', true)),
			'icon_class' => htmlspecialchars($this->input->post('icon', true)),
			'url'		=> htmlspecialchars($this->input->post('url', true))
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kontak_sosmed', $data);
	}

	public function hapusKontakMedsos($id){
		$this->db->where('id', $id);
		$this->db->delete('kontak_sosmed');
	}
	/*######################## End Kontak & Medsos Footer ######################*/


}