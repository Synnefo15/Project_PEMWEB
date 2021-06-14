<?php
class Pangan_model
{
    private $table = 'pangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPangan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // Try
    // public function getAllPangan()
    // {
    //     $this->db->query("SELECT pangan.*, kota.nama_kota FROM " . $this->table. "JOIN kota ON kota.id = pangan.kota" );
    //     return $this->db->resultSet();
    // }

    public function getPanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPangan($data)
    {
        $query = "INSERT INTO pangan
                    Values 
                    ('', :komoditas, :kategori, :kota, :harga)";
        $this->db->query($query);
        $this->db->bind('komoditas', $data['komoditas']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('harga', $data['harga']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPangan($id)
    {
        $query = "DELETE FROM pangan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
