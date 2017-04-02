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
    $_SESSION['SE'] = $_POST;
    unset($_SESSION['SE']['Year']);
    $str = <<< end
<script>
window.location.assign("TimeTableTe.php");
</script>
end;
    echo $str;
    echo "console.log(".$_SESSION['SE'].")";
}
else
{
    $str = <<< end
    <script>
    window.location.assign("TimeTableSe.php");
    </script>
end;
    echo $str;
}
?>