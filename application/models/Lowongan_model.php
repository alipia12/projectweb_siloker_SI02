<?php

class Lowongan_model extends CI_Model{

    public $id;
    public $deskripsi_pekerjaan;
    public $tanggal_akhir;
    public $mitra_id;
    public $email;



    public function getAll(){
        //select * from pasien

        //this->db->get('nama_tabel')
        $query = $this->db->get('lowongan');
        return $query;

    }

    public function findById($id){
        //select * from pasien where id = $id
        
        //$this->db->get_where('nama_tabel',array id)
        return $this->db->get_where('lowongan', ["id" => $id])->row();
    }

    public function delete($where,$table){

        //delete from pasien where id = id
        $this->db->where($where);
        $this->db->delete($table);
    }

    //add data

    public function save($data){
        //$this->db->insert('nama_tabel',data)
        $this->db->insert('lowongan',$data);
    }



    //edit data
   
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('lowongan',$data,array('id'=>$id));
    }


}




?>