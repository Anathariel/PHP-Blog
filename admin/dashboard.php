<?php
session_start();
if(!isset($_SESSION['id-user'])){
    header('location: ../front/connect.php');
}
echo 'ici le dashboard';