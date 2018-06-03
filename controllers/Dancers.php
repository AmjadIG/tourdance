<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property  dancers_model
     */
class Dancers extends CI_Controller
    {

        public function index()
        {
            $this->load->model('dancers_model');
            $data['dancer'] = $this->dancers_model->getListDancers();
            $this->load->view('dancers/dancers',$data);
        }
        public function add_dancer()
        {
            $this->load->view('dancers/add_dancer');
        }


    }

?>