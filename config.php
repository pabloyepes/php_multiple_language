<?php
session_start();

#$GLOBALS['locale'] = 'es';
#$_SESSION['lang'] = $GLOBALS['locale'];
if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = 'en';
else if (isset($_GET['lang']) && !empty($_GET['lang']))
    $_SESSION['lang'] = $_GET['lang'];

require_once "languages/" .$_SESSION['lang'] . ".php";
