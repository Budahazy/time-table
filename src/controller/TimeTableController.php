<?php
require_once('../model/TimeTableModel.php');


function isReserved($reservations, $day, $time)
{
    foreach ($reservations as $reservation) {
        if ($reservation['day'] == $day && $reservation['hour'] == $time) {
           return true;
        }
    }
    return false;
}

    $ttm = new TimeTableModel();
    $reservations = $ttm->getReservations();

    require('../view/TimeTableView.php');
