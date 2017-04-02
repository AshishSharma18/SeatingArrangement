<?php
if(!session_id())
{
    header('Location: homepage.php');
}
session_start();

    if (!isset($_SESSION[$_POST['Year']])) {

        $_SESSION[$_POST['Year']] = $_POST;
    }
    if(isset($_SESSION['SE'])&&isset($_SESSION['BE'])&&isset($_SESSION['TE']))
    {
        header('Location:TimeTablePdf.php');
    }
    else
    {
        header('Location:TimeTable.php');
    }
?>
