<?php
class Pangan_model
{
    private $table = 'pangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // ori
    // public function getAllPangan()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }

    
    public function getAllPangan()
    {
        $this->db->query("

        SELECT pangan.*, kategori.nama_kategori, kota.nama_kota 
        FROM " . $this->table. " 
        JOIN kategori ON kategori.id = pangan.kategori
        JOIN kota ON kota.id =  pangan.kota         
        ORDER BY id DESC " );
        
        return $this->db->resultSet();
    }

    public function getPanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPangan($data)
    {
        $query = "INSERT INTO pangan (komoditas, kategori, kota, harga) 
        VALUES (:komoditas, :kategori, :kota, :harga) ";
        $this->db->query($query);
        $this->db->bind('komoditas', $data['komoditas']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('harga', $data['harga']);      
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletePangan($id)
    {
        $this->db->query (' DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function updateDataPangan($data)
    {
        $query = "UPDATE pangan SET komoditas=:komoditas, kategori=:kategori, kota=:kota, harga=:harga WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('komoditas', $data['komoditas']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function cariPangan()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT pangan.*, kategori.nama_kategori, kota.nama_kota 
        FROM " . $this->table. " 
        JOIN kategori ON kategori.id = pangan.kategori
        JOIN kota ON kota.id =  pangan.kota WHERE komoditas LIKE :key ");
        $this->db->bind('key',"%$key%");
        return $this->db->resultSet();
    }
}
