<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StokBarang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function laporan()
    {
        $data = array(
            'title'   => 'Laporan Stok Barang',
            'content' => 'barang/laporan'
        );
        $this->load->view('template/main', $data);
    }
}
