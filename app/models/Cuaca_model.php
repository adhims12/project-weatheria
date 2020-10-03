<?php

class Cuaca_model
{
private $table = 'cuaca';
private $db;

public function __construct()
{
    $this->db = new Database;
}

    public function getAllcuaca()
    {
      $this->db->query('SELECT * FROM '. $this->table);
      return $this->db->resultset();
    }
    // insert data
    public function tambahDataCuaca($data)
    {
        $query = "INSERT INTO cuaca
                    VALUES ('', :kota, :hari, :waktu, :kecerahan, :humidity, :kecepatan__angin, :suhu)";
        $this->db->query($query);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('hari', $data['hari']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('kecerahan', $data['kecerahan']);
        $this->db->bind('humidity', $data['humidity']);
        $this->db->bind('kecepatan_angin', $data['kecepatan_angin']);
        $this->db->bind('suhu', $data['suhu']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
