<?php

class About extends controller
{
    public function index()
    {
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function sejarah()
    {
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/sejarah', $data);
        $this->view('templates/footer');
    }
    public function covid()
    {
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/covid', $data);
        $this->view('templates/footer');
    }
}
