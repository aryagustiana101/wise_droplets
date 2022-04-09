<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Module extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_root();
    }

    public function index()
    {
        redirect(base_url());
    }

    public function save_data_soil_moisture_sensor()
    {
        $value_sensor = $this->input->post('value_sensor');
        if (is_null($value_sensor)) {
            redirect(base_url());
        }
        $dataSensor = [
            'value_sensor' => $value_sensor
        ];
        $dataResponse = [
            'message' => "success"
        ];
        $this->Model_module->saveDataSoilMoistureSensor($dataSensor);
        echo (json_encode($dataResponse));
    }

    public function get_latest_feeding_time()
    {
        $key = $this->input->post('key');
        if (is_null($key)) {
            redirect(base_url());
        }
        $dataResponse = $this->Model_module->getLatestFeedingTime();
        $dataResponse = date("d F Y H:i:s", strtotime($dataResponse['created_at']));
        echo (json_encode($dataResponse));
    }

    public function save_latest_feeding_time()
    {
        $value = $this->input->post('value');
        if (is_null($value)) {
            redirect(base_url());
        }
        $dataValue = [
            'value' => $value
        ];
        $dataResponse = [
            'message' => "success"
        ];
        $this->Model_module->saveDataLatestFeedingTime($dataValue);
        echo (json_encode($dataResponse));
    }

    public function save_latest_watering_time()
    {
        $value = $this->input->post('value');
        if (is_null($value)) {
            redirect(base_url());
        }
        $dataValue = [
            'value' => $value
        ];
        $dataResponse = [
            'message' => "success"
        ];
        $this->Model_module->saveDataLatestWateringTime($dataValue);
        echo (json_encode($dataResponse));
    }

    public function get_latest_watering_time()
    {
        $key = $this->input->post('key');
        // if (is_null($key)) {
        //     redirect(base_url());
        // }
        $dataResponse = $this->Model_module->getLatestWateringTime();
        $dataResponse = date("d F Y H:i:s", strtotime($dataResponse['created_at']));
        echo (json_encode($dataResponse));
    }

    public function truncate_table_soil_moisture_sensor()
    {
        $user = $this->Model_module->findUser(['email' => $this->session->userdata('email')]);
        $password = $this->input->post('password');
        if (is_null($password)) {
            redirect(base_url('main'));
        }
        if (!password_verify($password, $user['password'])) {
            $this->session->set_flashdata('flash', 'wrong-password');
            redirect(base_url('setting'));
        }
        $this->Model_module->truncateTableSoilMoistureSensor();
        $this->session->set_flashdata('flash', 'truncate-success');
        redirect(base_url('main'));
    }

    public function truncate_table_watering_time()
    {
        $user = $this->Model_module->findUser(['email' => $this->session->userdata('email')]);
        $password = $this->input->post('password');
        if (is_null($password)) {
            redirect(base_url('main'));
        }
        if (!password_verify($password, $user['password'])) {
            $this->session->set_flashdata('flash', 'wrong-password');
            redirect(base_url('setting'));
        }
        $this->Model_module->truncateTableWateringTime();
        $this->session->set_flashdata('flash', 'truncate-success');
        redirect(base_url('main'));
    }
    public function truncate_table_feeding_time()
    {
        $user = $this->Model_module->findUser(['email' => $this->session->userdata('email')]);
        $password = $this->input->post('password');
        if (is_null($password)) {
            redirect(base_url('main'));
        }
        if (!password_verify($password, $user['password'])) {
            $this->session->set_flashdata('flash', 'wrong-password');
            redirect(base_url('setting'));
        }
        $this->Model_module->truncateTableFeedingTime();
        $this->session->set_flashdata('flash', 'truncate-success');
        redirect(base_url('main'));
    }
}
