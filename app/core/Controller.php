<?php

class controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}