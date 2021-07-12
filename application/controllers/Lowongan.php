<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {


	
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
		$this->load->model('lowongan_model');//load model
		$data['lowongan'] = $this->lowongan_model->getAll(); //query select all data
		$this->load->view('lowongan/index',$data);
	}

	public function view($id){
		
		$this->load->model('lowongan_model');
		$data['lowongan'] = $this->lowongan_model->findById($id);
		$this->load->view('lowongan/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('lowongan_model');//load model
		$where = array('id' => $id);
		$this->lowongan_model->delete($where,'lowongan');// query delete(delete from pasien where id = $id)
		redirect('lowongan/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('lowongan/tambah_lowongan');
	}

	public function save(){
	
		$this->load->model('lowongan_model');

		$data['deskripsi_pekerjaan'] =$this->input->post('deskripsi_pekerjaan');
		$data['tanggal_akhir'] =$this->input->post('tanggal_akhir');
        $data['mitra_id'] =$this->input->post('mitra_id');
        $data['email'] =$this->input->post('email');
		$this->lowongan_model->save($data);
		redirect('lowongan/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('lowongan_model');
		$data['lowongan'] = $this->lowongan_model->findById($id);
		$this->load->view('lowongan/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('lowongan_model');
		$id = $this->input->post('id');
        $data['deskripsi_pekerjaan'] =$this->input->post('deskripsi_pekerjaan');
		$data['tanggal_akhir'] =$this->input->post('tanggal_akhir');
        $data['mitra_id'] =$this->input->post('mitra_id');
        $data['email'] =$this->input->post('email');
		
		$this->lowongan_model->update($data,$id);
		redirect('lowongan/index');
	}


}
