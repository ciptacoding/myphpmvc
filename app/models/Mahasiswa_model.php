<?php

class Mahasiswa_model
{
  private $dbh; //database handler
  private $stmt; //statement

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';
    // cek koneksinya
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMhs()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
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