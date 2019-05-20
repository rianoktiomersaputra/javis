<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('data');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->helper(array('url','download'));
	}

	public function index(){		
		$data['user'] = $this->data->ambil_data()->result();
        $this->load->view('home/header',$data);
		$this->load->view('home/data',$data);
		$this->load->view('home/footer',$data);
	}

	public function data(){
        $data['user'] = $this->data->ambil_data()->result();
        $this->load->view('home/header',$data);
		$this->load->view('home/data',$data);
		$this->load->view('home/footer',$data);
	}

	public function tambah(){				
		$this->load->view('home/header');
		$this->load->view('home/tambah');
		$this->load->view('home/footer');
	}
	
	public function aksi_tambah(){				
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
 
		$data = array(
			'nama' => $nama,
			'jumlah' => $jumlah
			);
		$this->data->input_data($data,'barang');
		redirect('web/data');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->data->edit_data($where,'barang')->result();
		$this->load->view('home/header');
		$this->load->view('home/edit',$data);
		$this->load->view('home/footer');
	}

	public function aksi_edit(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
	
		$data = array(
			'nama' => $nama,
			'jumlah' => $jumlah,
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->data->update_data($where,$data,'barang');
		redirect('web/data');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->data->hapus_data($where,'barang');
		redirect('web/data');
	}
}