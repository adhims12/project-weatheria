<?php

class Cuaca extends controller
{
    public function index()
    {
        $data['judul'] = 'Cuaca';
        $data['wtr'] = $this->model('Cuaca_model')->getAllcuaca();
        $this->view('templates/header', $data);
        $this->view('cuaca/index', $data);
        $this->view('templates/footer');
    }
    // imsert data
    public function tambah()
    {
        // var_dump($_POST);
        if ($this->model('Cuaca_model')-> tambahDataCuaca($_POST) > 0 ){
            header('Location: ' . BASEURL . '/cuaca');
            exit;
        }
    }
}
