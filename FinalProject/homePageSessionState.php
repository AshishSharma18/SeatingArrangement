<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 29-03-2017
 * Time: 23:47
 */
session_start();
if(!isset($_SESSION['Details']))
{
    $_SESSION['Details'] = $_POST;
}

header('Location:page2.php');