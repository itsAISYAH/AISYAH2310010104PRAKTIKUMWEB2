<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    protected $_table = 'kategori';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, [$this->primary => $id])->row();
    }

    public function save()
    {
        $data = [
            'name' => $this->input->post('name', true)
        ];

        return $this->db->insert($this->_table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->where($this->primary, $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, [$this->primary => $id]);
    }
}
