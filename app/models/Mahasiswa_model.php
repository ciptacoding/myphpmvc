<?php

class Mahasiswa_model
{
  private $tabel = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database; //instance class Database, sehingga smua methodnya bisa digunakan
  }

  public function getAllMhs()
  {
    $this->db->query('SELECT * FROM ' . $this->tabel);
    return $this->db->resultSet();
    // method query dan resultSet merupakan hasil dari instance class Database
  }

  public function getDetailMhs($id)
  {
    $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDataMhs($data)
  {
    $query = "INSERT INTO mahasiswa VALUES (0, :nama, :nim, :email, :prodi)"; //sesuai dengan kolom dari tabel mahasiswa
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('prodi', $data['prodi']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusDataMhs($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getMhsById($id)
  {
    $query = "SELECT * FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function ubahDataMhs($data)
  {
    $query = "UPDATE mahasiswa SET
              nama = :nama,
              nim = :nim,
              email = :email,
              prodi = :prodi
              WHERE id = :id ";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('prodi', $data['prodi']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function cariDataMhs()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}

// array assosiatif
/*  private $mhs = [
    [
      "nama" => "Abel Yoshuara",
      "nim" => "200030182",
      "email" => "abelyhs@gmail.com",
      "prodi" => "Sistem Informasi"
    ],

    [
      "nama" => "Agus Widiatmika",
      "nim" => "200030482",
      "email" => "aguswdtmk@gmail.com",
      "prodi" => "Sistem Informasi"
    ],

    [
      "nama" => "Nyoman Mastra",
      "nim" => "200030582",
      "email" => "nymmastra@gmail.com",
      "prodi" => "Sistem Informasi"
    ],
  ];
*/