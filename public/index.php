<?php
session_start();
header("Content-type: text/html; charset=utf-8");

/* calling composer autoload */
require '../vendor/autoload.php';

Pecee\SimpleRouter\SimpleRouter::start();