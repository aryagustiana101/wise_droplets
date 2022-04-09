<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_root();
    }

    public function index()
    {
        $data = [
            'title' => 'Main Page',
            'valueSensors' => $this->Model_module->getAllSoilMoistureSensor(),
            'valueWaterings' => $this->Model_module->getAllWateringTime(),
            'valueFeedings' => $this->Model_module->getAllFeedingTime(),
            'segment' => $this->uri->segment(1)
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('main_index', $data);
        $this->load->view('templates/footer', $data);
    }
}
