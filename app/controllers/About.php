<?php
class About extends Controller
{
  public function index($nama = 'Wijdan', $pekerjaan = 'Mahasiswa', $umur = 21)
  {
    $data = [
      'judul' => 'About Me',
      'nama' => $nama,
      'pekerjaan' => $pekerjaan,
      'umur' => $umur,
    ];
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data = [
      'judul' => 'Pages',
    ];
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
