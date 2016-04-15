<?php

/**
 *
 */
class Lab_equipments extends CI_Controller {

    function __construct()
    {
       parent::__construct();
       $this->load->model('Lab_equipment_model');
       $this->load->helper('url');
       $this->load->helper('form');
    }

    public function index()
    {
        $data['query'] = $this->Lab_equipment_model->get_last_equipments();
        $this->load->view('lab_equipments/index', $data);
    }

    public function add()
    {
        $this->load->view('lab_equipments/add');
    }
}
