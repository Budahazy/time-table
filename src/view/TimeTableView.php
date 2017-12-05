<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time Table</title>
    <link href="../view/style/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php $daysOfWeek = array('H', 'K', 'Sze', 'Cs', 'P'); ?>

<?php if (isset($_GET['foglalas']) && $_GET['foglalas'] == "sikeres") echo "<h1> Sikeres foglalás! </h1>" ?>


<table border="2">

    <h1>Hónap neve</h1>

    <?php for ($i = 15; $i < 19; $i++) : ?>
        <tr>
            <?php foreach ($daysOfWeek as $day) : ?>

                <?php if (isReserved($reservations, array_search($day,$daysOfWeek)+1, $i)) : ?>
                    <td class="reserved">
                            <?= $day . ' - ' . $i . ':00' ?>
                        </td>
                <?php else: ?>
                    <td class="free"><a href="ReservationController.php?day=<?= $day ?>&time=<?= $i ?>">
                            <?= $day . ' - ' . $i . ':00' ?>
                        </a></td>
                <?php endif; ?>



            <?php endforeach; ?>
        </tr>
    <?php endfor; ?>


</table>


</body>
</html>
