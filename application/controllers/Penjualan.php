<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title'    => 'Data Barang Penjualan',
            'userlog'  => infoLogin(),
            'penjualan' => $this->Penjualan_model->getAll(),
            'content'  => 'penjualan/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title'   => 'Tambah Data Penjualan',
            'content' => 'penjualan/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Penjualan_model->save();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata("success", "Data penjualan berhasil disimpan");
        }
        redirect('penjualan');
    }

    public function getedit($id)
    {
        $data = array(
            'title'    => 'Update Data Penjualan',
            'penjualan' => $this->Penjualan_model->getById($id), 
            'content'  => 'penjualan/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->Penjualan_model->editData();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata("success", "Data penjualan berhasil diupdate");
        }
        redirect('penjualan');
    }

    public function delete($id)
    {
        $this->Penjualan_model->delete($id);
        redirect('penjualan');
    }
}
