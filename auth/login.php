<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../index.html');
} else {
    header('Location: ../home/home.php');
}
