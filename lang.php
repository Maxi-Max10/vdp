<?php
session_start();
$_SESSION['lang'] = $_GET['l'] ?? 'es';
header("Location: mountain-resort-farmstay");
?>