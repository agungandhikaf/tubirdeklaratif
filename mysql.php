<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "prolog";

$_link = new mysqli( $servername, $username, $password, $db );
$_link->set_charset( "utf8" );
