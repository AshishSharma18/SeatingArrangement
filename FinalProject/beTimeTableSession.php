<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 29-03-2017
 * Time: 22:52
 */
session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
if (isset($_POST['submit']))
{
    $_SESSION['BE'] = $_POST;
    unset($_SESSION['BE']['Year']);
    $str = <<< end
<script>
window.location.assign("TimeTablePrint.php");
</script>
end;
    echo $str;
}
else
{
    $str = <<< end
    <script>
    window.location.assign("TimeTableBe.php");
    </script>
end;
    echo $str;
}
?>