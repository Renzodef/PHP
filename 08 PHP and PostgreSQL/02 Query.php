<?php

// Run this file from terminal to have to correct formatted output

$host = "host=127.0.0.1"; // localhost
$port = "port=5432";
$dbname = "dbname=postgres";
$credentials = "user=postgres password=postgres"; 
$db = pg_connect( "$host $port $dbname $credentials" );

if(!$db){
    echo "Error : Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}

// Write SQL commands

// Create Table
$sql =<<<EOF
CREATE TABLE cars (id SERIAL, make TEXT, model TEXT, miles INT);
EOF;

// Populate Table
$sql1 =<<<EOF
INSERT into cars values 
(DEFAULT, 'subaru', 'outback', 3420);
INSERT into cars values 
(DEFAULT, 'honda', 'passport', 27);
INSERT into cars values 
(DEFAULT, 'volvo', 'XC40', 33000);
EOF;

// Select All from Table
$sql2 =<<<EOF
SELECT * from cars;
EOF;

// Delete Table
$sql3 =<<<EOF
DROP TABLE cars;
EOF;

// Execute SQL commands with pg_query
pg_query($db, $sql);
pg_query($db, $sql1);
$ret = pg_query($db, $sql2);
pg_query($db, $sql3);

// Fetch retrieved data with pg_fetch_row
while($row = pg_fetch_row($ret)){
    echo "\nid = $row[0]\n";
    echo "make = $row[1]\n";
    echo "model = $row[2]\n";
    echo "miles = $row[3]\n";
}

echo "\nOperation done successfully";

pg_close($db);

?>