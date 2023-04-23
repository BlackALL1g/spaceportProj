

<?php

// $db = mysqli_init();/

$cfg = [
    "hostname" => 'localhost',
    "username" => 'root',
    "password" =>  '',
    "database" => 'team_db',
    // "port" => 3307,
    "dir" => '../',
    "imgDir" => '/img/myheroes/'
];

// if ($db->connect('localhost', 'root', '', 'team_db')):


function load_pict($file, $conf) {
    $tmp_path = $file['tmp_name'];
    $to = '../'.$conf['imgDir'] . $file['name'];
    print_r($file);
    if (is_uploaded_file($tmp_path) && rename($tmp_path, $to)) {
        return '../'.$conf['imgDir'] . $file['name'];
    }
    return "";
}


$name = $_POST['name'];
$title = $_POST['title'];
print_r($_POST); print_r($_FILES);
$pictUrl = load_pict($_FILES['picture'], $cfg);
if ($pictUrl == "") {
    echo "error";
    exit(1);
}

$sql = "INSERT INTO `hero`(`name`, `title`, `picture`) VALUES ('$name','$title','$pictUrl')";

print_r($sql);

$db = mysqli_init();
if (!$db->connect($cfg['hostname'], $cfg['username'], 
    $cfg['password'], $cfg['database'])) 
{
    echo "cannot connect";
    exit (1); 
}
if ( mysqli_query($db, $sql) !== false )
    echo "ok";
else 
    echo "error";
$db->close();
