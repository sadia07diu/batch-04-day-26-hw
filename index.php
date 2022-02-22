<?php
session_start();
require_once 'vendor/autoload.php';

use App\Classes\Home;

$home = new Home();
$home->index();