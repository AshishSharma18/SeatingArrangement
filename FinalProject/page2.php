<?php
session_start();
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
?>

<!doctype html>
<html>
<head>
    <title>Exam Management System: Selection Page</title>
    <script>
        function timeTable()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('TimeTableSe.php');
            }
        }
        function seatingArrangement()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('seatingArrangement.php');
            }
        }
        function superVisorAllot()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('tt.php');
            }
        }
    </script>
</head>
    <body>
    <input type="button" onclick="timeTable()" value="Time Table"/><br/><br/>
    <input type="button" onclick="seatingArrangement()" value="Seating Arrangement"/><br/><br/>
    <input type="button" onclick="superVisorAllot()" value="Allocate Supervisor"/><br/><br/>
    </body>
</html>