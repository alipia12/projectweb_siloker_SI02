<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
    //menampilkan data program studi
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('mitra_model');//load model
		$data['mitra'] = $this->mitra_model->getAll(); //query select all data
		$this->load->view('mitra/index',$data);
	}

	public function view($id){
		
		$this->load->model('mitra_model');
		$data['mitra'] = $this->mitra_model->findById($id);
		$this->load->view('mitra/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('mitra_model');//load model
		$where = array('id' => $id);
		$this->mitra_model->delete($where,'mitra');// query delete(delete from pasien where id = $id)
		redirect('mitra/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('mitra/tambah_mitra');
	}

	public function save(){
	
		$this->load->model('mitra_model');

		$data['nama'] =$this->input->post('nama');
        $data['alamat'] =$this->input->post('alamat');
        $data['kontak'] =$this->input->post('kontak');
        $data['telpon'] =$this->input->post('telpon');
        $data['email'] =$this->input->post('email');
        $data['web'] =$this->input->post('web');
        $data['bidang_usaha_id'] =$this->input->post('bidang_usaha_id');
        $data['sektor_usaha_id'] =$this->input->post('sektor_usaha_id');
		$this->mitra_model->save($data);
		redirect('mitra/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('mitra_model');
		$data['mitra'] = $this->mitra_model->findById($id);
		$this->load->view('mitra/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('mitra_model');
		$id = $this->input->post('id');
		$data['nama'] =$this->input->post('nama');
        $data['alamat'] =$this->input->post('alamat');
        $data['kontak'] =$this->input->post('kontak');
        $data['telpon'] =$this->input->post('telpon');
        $data['email'] =$this->input->post('email');
        $data['web'] =$this->input->post('web');
        $data['bidang_usaha_id'] =$this->input->post('bidang_usaha_id');
        $data['sektor_usaha_id'] =$this->input->post('sektor_usaha_id');
		
		$this->mitra_model->update($data,$id);
		redirect('mitra/index');
	}


}
