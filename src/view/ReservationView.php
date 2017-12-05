<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time Table</title>
    <link href="../view/style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form action="ReservationController.php" method="get">
   <label>Adja meg a nevét!</label><br>
    <input type="hidden" name="day" value="<?= $_GET['day'] ?>">
    <input type="hidden" name="time" value="<?= $_GET['time'] ?>">
    <input type="text" name="name" required><br>
    <input type="submit" name="submit" value="Foglalj">
</form>

<a href='TimeTableController.php'>Vissza az időpont foglaláshoz</a>


</body>
</html>
