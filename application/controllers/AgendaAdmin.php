<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class AgendaAdmin extends CI_Controller{

	public function index(){
		$data['agendas']	  = $this->mAgenda->getAgenda();
		$data['title'] 		  = 'AGENDA ADMIN';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar', $data);
		$this->load->view('admin/agenda/index', $data);
		$this->load->view('admin/template/footer', $data);
	}

    public function tambahAgenda(){
        $data['title']  = 'Tambah Agenda';
        // set rules form input
        $this->form_validation->set_rules('nama', 'Nama Kegiatan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Kegiatan', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi Kegiatan', 'required');
        $this->form_validation->set_rules('img', 'Gambar Kegiatan', 'required');
        // fungsi upload gambar
		$agenda_img = $this->uploadGambar("img", $this->upload->data('file_name'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/navbar', $data);
            $this->load->view('admin/agenda/tambahAgenda', $data);
            $this->load->view('admin/template/footer', $data);
        }

        if (!$this->upload->do_upload('img')) {
        	$error =  $this->upload->display_errors();
        }else {
        	
	        $this->mAgenda->tambahAgenda($agenda_img);
	        $this->session->set_flashdata('alert', 'Ditambahkan');
	        redirect(base_url('admin/agenda'));
        }
    }

	public function editAgenda($id){
		$data['title'] 		     = 'Ubah Agenda';
		$data['agenda'] 	     = $this->db->get_where('agenda', ['id' => $id])->row();

		if ($this->input->method() == "post") {
			$this->updateAgenda($id);
		}
		$this->load->view('admin/template/header',$data); 
		$this->load->view('admin/template/navbar'); 
		$this->load->view('admin/agenda/editAgenda', $data); 
		$this->load->view('admin/template/footer');
		
	}

	public function updateAgenda($id) {
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		if(!$this->form_validation->run()) return false;

		$agenda = $this->db->get_where('agenda', ['id' => $id])->row();
		$agenda_img = $this->uploadGambar("img", $agenda->img);
		$this->mAgenda->ubahAgenda($agenda_img);
		$this->session->set_flashdata('alert', 'Diubah');
		redirect(base_url('admin/agenda'));
	}

	private function uploadGambar($inputName,$gambarDefault=null){
		$config['upload_path']   = './public/img/agenda/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);
		// initialize library upload
		if(isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] && $this->upload->do_upload($inputName)){
			if($gambarDefault && $gambarDefault!="default.png" && is_file(FCPATH ."public/img/agenda/". $gambarDefault ) ){
				unlink(FCPATH  ."public/img/agenda/". $gambarDefault); //Delete gambar sebelumnya jika ada gambar baru
			}
			$fileGambar = $this->upload->data();
			return $fileGambar['file_name'];
		}
		return $gambarDefault;
	}
	
	public function hapusAgenda($id){
		$this->mAgenda->hapusAgenda($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/agenda'));
	}

}


?>