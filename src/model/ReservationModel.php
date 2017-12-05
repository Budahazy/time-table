<?php
require_once('mysql/Database.php');

class ReservationModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReservation($day, $time)
    {
        $this->db->query("SELECT * FROM reservations WHERE (day = $day AND hour = $time)");
        return $this->db->singleResult();
    }

    public function reserveTime($day, $time, $name)
    {
        $this->db->query("INSERT INTO reservations (day, hour, who) VALUES(:day, :time, :name)");
        $this->db->bind(":day", $day);
        $this->db->bind(":time", $time);
        $this->db->bind(":name", $name);
        $this->db->execute();
    }

}