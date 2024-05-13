<?php

// Represents a connection between PHP and a MySQL database. mysqli(hostname, username, password, database, port)
$conexion = new mysqli("localhost","root","","sistema_asistencia","3306");
// PHP script that sets the charset to "utf8" for a connection to a MySQL database. This step is used to ensure that the connection and queries to the database correctly handle Unicode characters.
$conexion->set_charset("utf8");
// used in PHP to set the default time zone of the script to "America/Argentina/Cordoba". This means that the date and time functions in the script, such as date() and time(), will use the Córdoba, Argentina time zone to calculate and display dates and times.
date_default_timezone_set("America/Argentina/Cordoba");



?>