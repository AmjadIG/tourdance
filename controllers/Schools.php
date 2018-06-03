<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Schools extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->load->view('schools/schools');
        }
        public function add_school(){
            $this->load->view('schools/add_school');
        }
    }

?>