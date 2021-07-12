<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sektor_usaha extends CI_Controller {


	
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
		$this->load->model('sektor_usaha_model');//load model
		$data['sektor_usaha'] = $this->sektor_usaha_model->getAll(); //query select all data
		$this->load->view('sektor_usaha/index',$data);
	}

	public function view($id){
		
		$this->load->model('sektor_usaha_model');
		$data['sektor_usaha'] = $this->sektor_usaha_model->findById($id);
		$this->load->view('sektor_usaha/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('sektor_usaha_model');//load model
		$where = array('id' => $id);
		$this->sektor_usaha_model->delete($where,'sektor_usaha');// query delete(delete from pasien where id = $id)
		redirect('sektor_usaha/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('sektor_usaha/tambah_sektor_usaha');
	}

	public function save(){
	
		$this->load->model('sektor_usaha_model');
		$data['nama'] =$this->input->post('nama');
		$this->sektor_usaha_model->save($data);
		redirect('sektor_usaha/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('sektor_usaha_model');
		$data['sektor_usaha'] = $this->sektor_usaha_model->findById($id);
		$this->load->view('sektor_usaha/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('sektor_usaha_model');
		$id = $this->input->post('id');
		$data['nama'] =$this->input->post('nama');
		
		$this->sektor_usaha_model->update($data,$id);
		redirect('sektor_usaha/index');
	}


}
