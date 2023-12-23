<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];

// 1. Connect to database
$db = new SQLite3('friends.db');

// 2. Query statement
$sql = "INSERT INTO friends (`fname`, `lname`) values ('$fname', '$lname')";
echo $sql;

// 3. Save in database
$db->exec('BEGIN');
$db->query($sql);
$db->exec('COMMIT');

header("Location:index.php");