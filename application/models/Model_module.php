<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_module extends CI_Model
{
    public function findUser($email)
    {
        return $this->db->get_where('user', $email)->row_array();
    }

    function saveDataSoilMoistureSensor($dataSensor)
    {
        $this->db->insert('soil_moisture_sensor', $dataSensor);
    }

    function saveDataLatestFeedingTime($dataValue)
    {
        $this->db->insert('servo_feeder', $dataValue);
    }

    function saveDataLatestWateringTime($dataValue)
    {
        $this->db->insert('main_water_pump', $dataValue);
    }

    function getAllSoilMoistureSensor()
    {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('soil_moisture_sensor')->result_array();
    }

    function getLatestSoilMoistureSensor()
    {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('soil_moisture_sensor')->result_array();
    }

    public function deleteDataSoilMoistureSensor($id)
    {
        $this->db->where($id);
        $this->db->delete('soil_moisture_sensor');
    }

    public function getAllWateringTime()
    {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('main_water_pump')->result_array();
    }

    public function getAllFeedingTime()
    {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('servo_feeder')->result_array();
    }

    public function getLatestFeedingTime()
    {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('servo_feeder')->row_array();
    }

    public function getLatestWateringTime()
    {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('main_water_pump')->row_array();
    }

    public function truncateTableSoilMoistureSensor()
    {
        $this->db->query("TRUNCATE `wise_droplets`.`soil_moisture_sensor`");
    }
    public function truncateTableWateringTime()
    {
        $this->db->query("TRUNCATE `wise_droplets`.`main_water_pump`");
    }
    public function truncateTableFeedingTime()
    {
        $this->db->query("TRUNCATE `wise_droplets`.`servo_feeder`");
    }
}
