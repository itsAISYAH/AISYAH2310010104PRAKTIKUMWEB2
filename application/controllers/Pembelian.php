<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembelian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title'    => 'Data Barang Pembelian',
            'userlog'  => infoLogin(),
            'pembelian' => $this->Pembelian_model->getAll(),
            'content'  => 'pembelian/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title'   => 'Tambah Data Pembelian',
            'content' => 'pembelian/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Pembelian_model->save();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata("success", "Data pembelian berhasil disimpan");
        }
        redirect('pembelian');
    }

    public function getedit($id)
    {
        $data = array(
            'title'    => 'Update Data Pembelian',
            'pembelian' => $this->Pembelian_model->getById($id), 
            'content'  => 'pembelian/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->Pembelian_model->editData();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata("success", "Data pembelian berhasil diupdate");
        }
        redirect('pembelian');
    }

    public function delete($id)
    {
        $this->Pembelian_model->delete($id);
        redirect('pembelian');
    }
}
