<?php

class Contact extends controller
{
    public function index()
    {
        $data['judul'] = 'Contact';
        $this->view('contact/index', $data);
        $this->view('templates/footer');
    }
}
