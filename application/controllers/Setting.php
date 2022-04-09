<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_root();
    }

    public function index()
    {
        $data = [
            'title' => 'Settings',
            'valueSensors' => $this->Model_module->getAllSoilMoistureSensor(),
            'segment' => $this->uri->segment(1),
            'user' => $this->Model_auth->findUser(['email' => $this->session->userdata('email')]),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('setting_index', $data);
        $this->load->view('templates/footer', $data);
    }
}
