<?php
class Barang_model
{
    private $table = 'kota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO kota
                    Values 
                    ('', :nama_kota, :provinsi)";
        $this->db->query($query);
        $this->db->bind('nama_kota', $data['nama_kota']);
        $this->db->bind('provinsi', $data['provinsi']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id)
    {
        $query = "DELETE FROM kota WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
