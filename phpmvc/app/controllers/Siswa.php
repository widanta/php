<?php 

class Siswa extends Controller {
  public function index()
  {
    $data['judul'] = 'Daftar Siswa';
    $data['sis'] = $this->model('Siswa_model')->getAllSiswa();
    $this->view('templates/header',$data);
    $this->view('siswa/index', $data);
    $this->view('templates/footer');
  }
}


?>