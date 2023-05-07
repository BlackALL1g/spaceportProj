<?php
$db = new mysqli('localhost', 'root', '', 'team_database');
if ($db->connect_errno) {
    die('Connect error: ' . $db->connect_error);
}

$res = $db->query('SELECT * FROM hero ORDER BY id ASC');

if (!$res) {
    die('Query error: ' . $db->error);
}

$data = $res->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($data);