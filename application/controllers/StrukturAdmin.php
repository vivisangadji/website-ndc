<?php 

class StrukturAdmin extends CI_Controller {
    public function index(){
		$data['title'] = 'Struktur';
		$data['struktur'] = $this->db->get('struktur')->row();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/struktur/index', $data);
		$this->load->view('admin/template/footer');
	}

    public function tambahStruktur(){
        $data['title'] = 'Tambah Struktur';
		$this->form_validation->set_rules('periode', 'Periode', 'required');
		$this->form_validation->set_rules('struktur', 'Gambar Struktur', 'required');
		$struktur = $this->uploadGambar("struktur", $this->upload->data('file_name'));
		
        if(!$this->form_validation->run()){
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/struktur/tambah', $data);
			$this->load->view('admin/template/footer');
		}
		
		if (!$struktur) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$this->db->insert('struktur', [
				"periode" => $this->input->post('periode'),
				"img" => $struktur,
			]);
			$this->session->set_flashdata("alert", "ditambahkan");
			return redirect(base_url('admin/struktur'));
		}
		
    }

	public function editStruktur($id){
		$data['title'] = 'Edit Struktur';
		$data['struktur'] = $this->db->get_where('struktur', ['id' => $id])->row();

		if($this->input->method()=="post"){
			$this->updateStruktur($id);
		}
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/struktur/edit', $data);
		$this->load->view('admin/template/footer');
	}

	public function updateStruktur($id){
		$this->form_validation->set_rules('periode', 'Periode', 'required');
		if(!$this->form_validation->run()) return false;
		
		$struktur = $this->db->get_where('struktur', ['id' => $id])->row();
		$gambar = $this->uploadGambar("struktur", $struktur->img);
		$this->db->where('id', $id)->update("struktur", [
			"periode" => $this->input->post("periode"),
			"img" => $gambar
		]);
		$this->session->set_flashdata("alert","diubah");
		return redirect(base_url("admin/struktur"));
	}
	
    private function uploadGambar($inputName,$gambarDefault=null){
		$config['upload_path']   = './public/img/struktur/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);
		// initialize library upload
		if(isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] && $this->upload->do_upload($inputName)){
			if($gambarDefault && $gambarDefault!="default.png" && is_file(FCPATH ."public/img/struktur/". $gambarDefault ) ){
				unlink(FCPATH  ."public/img/struktur/". $gambarDefault); //Delete gambar sebelumnya jika ada gambar baru
			}
			$gambarDefault = $this->upload->data();
			return $gambarDefault['file_name'];
		}
		return $gambarDefault;
	}

	public function hapusStruktur($id){
		$item = $this->db->get_where("struktur", ["id" => $id])->row();
		if ($item->img != null) {
			$target_file = "./public/img/struktur/". $item->img;
			unlink($target_file);
		}
		$this->db->where('id', $id)->delete('struktur');
		$this->session->set_flashdata('alert','dihapus');
		redirect(base_url('admin/struktur'));
	}

}