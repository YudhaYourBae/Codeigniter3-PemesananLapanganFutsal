<?php
defined("BASEPATH") OR exit('No direct script access allowed');
class latihan_ctrl extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index(){
        echo "Ini method index pada controller latihan controller baru";
    }
    public function hello_world(){
        echo "Ini method Hello World pada controller latihan";
    }
}