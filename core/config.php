<?php
    define('PANEL_COLOR', 'primary'); // default, success, primary

    if ($_SERVER['SERVER_NAME'] == 'petrenko-webdev.ho.ua') {
        define('URL', '/muravej/');
    }
    else {
        define('URL', '/');
    }