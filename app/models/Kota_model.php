<?php

class Kota_model {
	
	private $table = 'kota';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllKota()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getKotaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahKota($data)
	{
		$query = "INSERT INTO kota (nama_kota, provinsi) VALUES(:nama_kota, :provinsi)";
		$this->db->query($query);
		$this->db->bind('nama_kota',$data['nama_kota']);
		$this->db->bind('provinsi',$data['provinsi']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataKota($data)
	{
		$query = "UPDATE kota SET nama_kota=:nama_kota, provinsi=:provinsi WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nama_kota',$data['nama_kota']);
		$this->db->bind('provinsi',$data['provinsi']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteKota($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariKota()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE nama_kota LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}