<?php
// include_once "model/model.php"; 
// class Admin extends controller {
//     public $model;

//     public function __construct(){
//         $this->model = new model();
//     }

//     public function proses(){
//         $hasil = $this->model->getHasil();

//         if ($hasil =='true'){
//             include 'sukseslogin.php';
//         }
//         else {
//             include 'views/login/index.php';
//         }
//     }
// }


class Admin extends controller
{
    public function index()
    {
        $data['judul'] = 'Admin';
        $this->view('login/index', $data);
    
    }
}
