<?php 

class MPendaftaran extends CI_Model {
    public function getStatusPendaftaran(){
        return $this->db->get('status_pendaftaran')->result();
    }

    public function getJurusan(){
        return $this->db->get('jurusan')->result();
    }

    public function addPendaftaran(){
        $data = [
			'stb' 	         => $this->input->post('stb'),
			'nama_lengkap'   => htmlspecialchars($this->input->post('nama_lengkap')),
			'nama_panggilan' => htmlspecialchars($this->input->post('nama_panggilan')),
			'tmpt_lahir' 	 => htmlspecialchars($this->input->post('tmpt_lahir')),
			'tgl_lahir' 	 => $this->input->post('tgl_lahir'),
			'jkel' 		     => $this->input->post('jkel'),
			'alamat'         => htmlspecialchars($this->input->post('alamat')),
			'no_hp'          => htmlspecialchars($this->input->post('no_hp')),
			'email'          => htmlspecialchars($this->input->post('email')),
			'kampus'         => htmlspecialchars($this->input->post('kampus')),
			'jurusan'        => htmlspecialchars($this->input->post('jurusan')),
			'alasan'         => htmlspecialchars($this->input->post('alasan'))
		];

		$this->db->insert('calon_anggota', $data);
    }

	public function getDataPendaftar(){
		return $this->db->get('calon_anggota')->result();

	}

	public function editPendaftaran($stb){
		$data = [
			'stb' => $this->input->post('stb'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_panggilan' => $this->input->post('nama_panggilan'),
			'tmpt_lahir' => $this->input->post('tmpt_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jkel' => $this->input->post('jkel'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'kampus' => $this->input->post('kampus'),
			'jurusan' => $this->input->post('jurusan'),
			'alasan' => $this->input->post('alasan'),
			'tgl_daftar' => $this->input->post('tgl_daftar')
		];

		$this->db->where('stb', $stb);
		$this->db->update('calon_anggota', $data);
	}

}




?>