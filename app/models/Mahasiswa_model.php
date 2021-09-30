<?php
class Mahasiswa_model
{
  private $mhs = [
    [
      "nama"    => "Wijdan MUhammad Ridwanulloh",
      "nrp"     => "193040034",
      "email"   => "193040034.wijdan@mail.unpas.ac.id",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama"    => "Putra Hanif Ammarta",
      "nrp"     => "193040001",
      "email"   => "193040001.putra@mail.unpas.ac.id",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama"    => "Agung Gumelar",
      "nrp"     => "193040008",
      "email"   => "193040008.agung@mail.unpas.ac.id",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama"    => "Aryogi Aziz",
      "nrp"     => "1930400223",
      "email"   => "193040023.aryogi@mail.unpas.ac.id",
      "jurusan" => "Teknik Informatika"
    ]
  ];

  public function getAllMahasiswa()
  {
    return $this->mhs;
  }
}
