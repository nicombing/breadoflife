<?php
session_start();
require_once 'includes/lang.php';

if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'id'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Redirect back to previous page or home
$referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header('Location: ' . $referer);
exit;
