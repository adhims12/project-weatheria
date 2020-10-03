<?php

class Home extends controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
