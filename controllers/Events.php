<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Events extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            //$this->load->model('tournaments_model');
            //$this->load->model('shows_model');
        }
        public function index(){
            $this->load->view('events/events');
        }
        public function tournaments(){
            $this->load->model('tournaments_model');
            $data['tournament'] = $this->tournaments_model->getListTours();
            $this->load->view('events/tournaments/tournaments');
        }
        public function shows(){
            $this->load->model('shows_model');
            $data['show'] = $this->shows_model->getListShows();
            $this->load->view('events/shows/shows');
        }
    }

?>