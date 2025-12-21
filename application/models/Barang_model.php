<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

class Barang_model extends CI_Model {
    protected $_table  = 'barang';
    protected $primary = 'id';

    public function getAll()
    {
    $sql = "SELECT a.id, a.barkode, a.name, b.name AS satuan, c.name AS kategori, a.harga_beli, a.harga_jual, a.stok
            FROM barang a LEFT JOIN satuan b ON a.satuan_id = b.id LEFT JOIN kategori c ON a.kategori_id = c.id";
    return $this->db->query($sql)->result();
    }

    public function save()
    {
        $data = array(
            'barkode'       => htmlspecialchars($this->input->post('barkode'), true),
            'name'          => htmlspecialchars($this->input->post('name'), true),
            'satuan_id'     => htmlspecialchars($this->input->post('satuan_id'), true),
            'kategori_id'   => htmlspecialchars($this->input->post('kategori_id'), true),
            'stok'          => htmlspecialchars($this->input->post('stok'), true),
            'harga_jual'    => htmlspecialchars($this->input->post('harga_jual'), true),
            'harga_beli'    => htmlspecialchars($this->input->post('harga_beli'), true),
            'supplier_id'   => htmlspecialchars($this->input->post('supplier_id'), true),
            'user_id'       => htmlspecialchars($this->input->post('user_id'), true),
        );
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post("id");

        $data = array(
            'barkode'       => htmlspecialchars($this->input->post('barkode'), true),
            'name'          => htmlspecialchars($this->input->post('name'), true),
            'satuan_id'     => htmlspecialchars($this->input->post('satuan_id'), true),
            'kategori_id'   => htmlspecialchars($this->input->post('kategori_id'), true),
            'stok'          => htmlspecialchars($this->input->post('stok'), true),
            'harga_jual'    => htmlspecialchars($this->input->post('harga_jual'), true),
            'harga_beli'    => htmlspecialchars($this->input->post('harga_beli'), true),
            'supplier_id'   => htmlspecialchars($this->input->post('supplier_id'), true),
        );

        return $this->db->where('id', $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, ['id' => $id]);
    }

}
