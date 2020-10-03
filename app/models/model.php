<?php

class Model{
    public function getHasil(){
        if (isset($_REQUEST['username'])&&isset($_REQUEST['password'])){
            if ($_REQUEST['username']=='admin' &&$_REQUEST['password']=='12345'){
                return true;
            }
        }
        else{
            return false;
        }
    }
}