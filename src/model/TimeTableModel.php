<?php

require_once('mysql/Database.php');

class TimeTableModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getReservations()
    {
        $this->db->query('SELECT day, hour FROM reservations');
        return $this->db->multipleResult();
    }

}