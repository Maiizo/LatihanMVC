<?php

class model_office {
    public $nama;
    public $alamat;
    public $kota;
    public $telepon;
    public $employees;

    public function __construct(){
        $this->employees = array();
    }
}
?>