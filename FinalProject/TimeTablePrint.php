<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 30-03-2017
 * Time: 19:53
 */
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
?>
<!doctype html>
<html>
<head>
    <title>
        Time Table Print
    </title>
</head>
<body>
<h1>Printing of timetable done successfully!!!</h1>
<?php header('Location:TimeTablePdf.php');?>
</body>
</html>