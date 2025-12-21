<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title'     => 'View Data Kategori',
            'kategori'  => $this->Kategori_model->getAll(),
            'content'   => 'kategori/index'
        );

        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title'     => 'Tambah Data Kategori',
            'content'   => 'kategori/add_form'
        );

        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Kategori_model->save();

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data kategori berhasil disimpan");
        }

        redirect('kategori');
    }

    public function getedit($id)
    {
        $this->form_validation->set_rules('name', 'Nama Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'     => 'Edit Kategori',
                'kategori'  => $this->Kategori_model->getById($id),
                'content'   => 'kategori/edit_form'
            );

            $this->load->view('template/main', $data);

        } else {
            $update = array(
                'name' => $this->input->post('name', true)
            );

            $this->Kategori_model->update($id, $update);

            $this->session->set_flashdata("success", "Data kategori berhasil diupdate");
            redirect('kategori');
        }
    }

    public function delete($id)
    {
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }
}
