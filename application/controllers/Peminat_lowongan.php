<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminat_lowongan extends CI_Controller {


	
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
		$this->load->model('peminat_lowongan_model');//load model
		$data['peminat_lowongan'] = $this->peminat_lowongan_model->getAll(); //query select all data
		$this->load->view('peminat_lowongan/index',$data);
	}

	public function view($id){
		
		$this->load->model('peminat_lowongan_model');
		$data['peminat_lowongan'] = $this->peminat_lowongan_model->findById($id);
		$this->load->view('peminat_lowongan/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('peminat_lowongan_model');//load model
		$where = array('id' => $id);
		$this->peminat_lowongan_model->delete($where,'peminat_lowongan');// query delete(delete from pasien where id = $id)
		redirect('peminat_lowongan/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('peminat_lowongan/tambah_peminat_lowongan');
	}

	public function save(){
	
		$this->load->model('peminat_lowongan_model');

		$data['nim'] =$this->input->post('nim');
        $data['nama'] =$this->input->post('nama');
        $data['alasan'] =$this->input->post('alasan');
        $data['prodi_id'] =$this->input->post('prodi_id');
        $data['lowongan_id'] =$this->input->post('lowongan_id');
		$this->peminat_lowongan_model->save($data);
		redirect('peminat_lowongan/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('peminat_lowongan_model');
		$data['peminat_lowongan'] = $this->peminat_lowongan_model->findById($id);
		$this->load->view('peminat_lowongan/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('peminat_lowongan_model');
		$id = $this->input->post('id');
		$data['nim'] =$this->input->post('nim');
        $data['nama'] =$this->input->post('nama');
        $data['alasan'] =$this->input->post('alasan');
        $data['prodi_id'] =$this->input->post('prodi_id');
        $data['lowongan_id'] =$this->input->post('lowongan_id');
		
		$this->peminat_lowongan_model->update($data,$id);
		redirect('peminat_lowongan/index');
	}


}
