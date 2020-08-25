<?php

// Installation of PostgreSQL is needed to run this file

// Before running this file you have the open AMPPS and click on 
// the PHP Extensions button in the initial home.
// Then you need to apply php_pgsql.ddl and restart AMPPS
// After that you can either run this file with AMPPS in localhost or from terminal

$host = "host=127.0.0.1"; // localhost
$port = "port=5432";
$dbname = "dbname=postgres";
$credentials = "user=postgres password=postgres"; 
$db = pg_connect( "$host $port $dbname $credentials" );
if(!$db){
    echo "Error : Unable to open database";
} else {
    echo "Opened database successfully";
}
pg_close($db);
?>