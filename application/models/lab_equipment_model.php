<?php
/**
 *
 */
class Lab_equipment_model extends CI_Model {

    var $name = '';
    var $description = '';
    var $total = '';
    var $image = '';


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_last_equipments($limit=10)
    {
        $query = $this->db->get('lab_equipments', $limit);
        //var_dump($query);
        return $query->result();
    }

    function insert_equipment()
    {
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];
        $this->total = $_POST['total'];
        $this->image = $_POST['image'];

        $this->db->insert('lab_equipments', $this);
    }

    function update_equipment()
    {
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];
        $this->total = $_POST['total'];
        $this->image = $_POST['image'];

        $this->db->update('lab_equipments', $this, array('id' => $_POST['id']));
    }

}
