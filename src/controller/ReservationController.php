<?php
require_once('../model/ReservationModel.php');

function isTimeValid($time)
{
    if ($time >= 15 && $time <= 18) {
        return true;
    } else {
        return false;
    }
}

function isDayValid($day)
{
    switch ($day) {
        case "H":
            return 1;
            break;
        case "K":
            return 2;
            break;
        case "Sze":
            return 3;
            break;
        case "Cs":
            return 4;
            break;
        case "P":
            return 5;
            break;
        default:
            return false;
            break;
    }
}


if (isset($_GET['time']) && $_GET['day'] && $_GET['day'] != null && $_GET['time'] != null) {
    require_once('../view/ReservationView.php');

    if (isset($_GET['submit']) && $_GET['name'] != null && isTimeValid($_GET['time']) && isDayValid($_GET['day']) != false) {
        $rm = new ReservationModel();
        $result = $rm->getReservation(isDayValid($_GET['day']), $_GET['time']);
        if ($result != false) {
            echo "<h2><br>Erre az időpontra (" . $_GET['day'] . "-" . $_GET['time'] . ":00)-ra már " . $result['who'] . " foglalt időpontot!<br></h2>";
        } else {
            $rm->reserveTime(isDayValid($_GET['day']), $_GET['time'], $_GET['name']);
            header('Location: TimeTableController.php?foglalas=sikeres');
        }
    }
} else {
    echo "Hibás/hiányzó adatok.";
}







