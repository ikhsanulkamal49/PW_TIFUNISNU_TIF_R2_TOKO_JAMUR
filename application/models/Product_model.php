<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
	private $_table = "tb_jamur";

	public $id_barang;
	public $nama_barang;
	public $harga_satuan;
	public $satuan;

 	public function rules()
    {
        return [
        	['field' => 'nama_barang',
            'label' => 'nama barang',
            'rules' => 'required'],

            ['field' => 'harga_satuan',
            'label' => 'harga satuan',
            'rules' => 'required'],

            ['field' => 'satuan',
            'label' => 'satuan',
            'rules' => 'required'],
        ];
}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
    }

    public function save()
     {
        $post = $this->input->post();
        $this->id_barang = uniqid();
        $this->nama_barang = $post["nama_barang"];
        $this->harga_satuan = $post["harga_satuan"];
        $this->satuan = $post["satuan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->harga_satuan = $post["harga_satuan"];
        $this->satuan = $post["satuan"];
        return $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id_barang));
    }
}