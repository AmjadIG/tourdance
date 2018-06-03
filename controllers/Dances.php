<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dances extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('dances/index_dances');
    }
    
    public function list_dances(){
        $this->load->view('dances/list_dances');
    }
}

?>