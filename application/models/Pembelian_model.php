<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {
    
    protected $_table = 'pembelian';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $data = array(
            'invoice'     => htmlspecialchars($this->input->post('invoice'), true),
            'total'       => htmlspecialchars($this->input->post('total'), true),
            'bayar'       => htmlspecialchars($this->input->post('bayar'), true),
            'deskripsi'   => htmlspecialchars($this->input->post('deskripsi'), true),
            'tanggal'     => htmlspecialchars($this->input->post('tanggal'), true),
            'supplier_id' => htmlspecialchars($this->input->post('supplier_id'), true),
            'user_id'     => htmlspecialchars($this->input->post('user_id'), true),
        );

        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post('id');

        $data = array(
            'invoice'     => htmlspecialchars($this->input->post('invoice'), true),
            'total'       => htmlspecialchars($this->input->post('total'), true),
            'bayar'       => htmlspecialchars($this->input->post('bayar'), true),
            'deskripsi'   => htmlspecialchars($this->input->post('deskripsi'), true),
            'tanggal'     => htmlspecialchars($this->input->post('tanggal'), true),
            'supplier_id' => htmlspecialchars($this->input->post('supplier_id'), true),
            'user_id'     => htmlspecialchars($this->input->post('user_id'), true),
        );

        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data pembelian berhasil didelete");
        }
    }
}
