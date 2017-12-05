<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time Table</title>
        <link href="../view/style/style.css" rel="stylesheet" type="text/css" />
<!--    <link href="./style/style.css" rel="stylesheet" type="text/css"/>-->
</head>
<body>


<?php $daysOfWeek = array('H', 'K', 'Sze', 'Cs', 'P'); ?>

<table border="2">

    <h1>December</h1>

    <?php for ($i = 15; $i < 19; $i++) : ?>
        <?= '<tr>' ?>

        <?php foreach ($daysOfWeek as $day) : ?>
            <?= '<td class="free"><a href="ReservationController.php?day=' . $day . '&time=' . $i . '">' ?>
            <?= $day . ' - ' . $i . ':00' ?>
            <?= '</a></td>' ?>
        <?php endforeach; ?>
        <?= '</tr>' ?>
    <?php endfor; ?>


</table>


</body>
</html>
