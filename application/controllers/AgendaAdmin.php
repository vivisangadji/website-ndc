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
        $this->form_validation->set_rules('img', 'Gambar Kegiatan', 'required');

        // config upload file
		$config['upload_path']   = './public/img/agenda';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/navbar', $data);
            $this->load->view('admin/agenda/tambahAgenda', $data);
            $this->load->view('admin/template/footer', $data);
        }

        if (!$this->upload->do_upload('img')) {
        	$error =  $this->upload->display_errors();
        }else {
        	$fileGambar = $this->upload->data();
        	// compress image
	        $config['image_library']='gd2';
	        $config['source_image'] ='./public/img/agenda/'.$fileGambar['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio']= FALSE;
	        $config['quality']      = '50%';
	        $config['width']        = 750;
	        $config['height']       = 500;
	        $config['new_image']    = './public/img/agenda/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

	        // insert data
        	$data_gambar = $fileGambar['file_name'];
	        $this->mAgenda->tambahAgenda($data_gambar);
	        $this->session->set_flashdata('alert', 'Ditambahkan');
	        redirect(base_url('admin/agenda'));
        }
    }

	public function editAgenda($id){
		$data['title'] 		     = 'Ubah Agenda';
		$data['agenda'] 	     = $this->db->get_where('agenda', ['id' => $id])->row();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('img', 'Gambar', 'required');

		// config upload file
		$config['upload_path']   = './public/img/agenda';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data); 
			$this->load->view('admin/template/navbar'); 
			$this->load->view('admin/agenda/editAgenda', $data); 
			$this->load->view('admin/template/footer'); 
		}

        if (!$this->upload->do_upload('img')){
            $error = $this->upload->display_errors();
        }else {
        	$fileGambar = $this->upload->data();
        	// compress image
        	$config['image_library'] = 'gd2';
        	$config['source_image']  = './public/img/agenda/'.$fileGambar;
        	$config['quality']       = '50%';
			$config['create_thumb'] = TRUE;
	        $config['maintain_ratio']= TRUE;
        	$config['width']         = 750;
        	$config['height']        = 500;
        	$config['new_image']     = './public/img/agenda/'.$fileGambar;
        	// load library image_lib
        	$this->load->library('image_lib',$config);
        	$this->image_lib->resize();

        	// ubah data
        	$image = $fileGambar['file_name'];
        	$this->mAgenda->ubahAgenda($image);
        	$this->session->set_flashdata('alert', 'Diubah');
        	redirect(base_url('admin/agenda'));
        }
	}
	
	public function hapusAgenda($id){
		$this->mAgenda->hapusAgenda($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/agenda'));
	}

}


?>