<?php
session_start();

if(!$_SESSION['user'])
{
    header('Location: dropdown.html');
}
?>
