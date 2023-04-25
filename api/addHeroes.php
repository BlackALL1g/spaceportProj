

<?php

$cfg = [
    "hostname" => 'localhost',
    "username" => 'root',
    "password" =>  '',
    "database" => 'team_db',
    "imgDir" => 'img/myheroes/'
];

function load_pict($file, $conf) {

    $tmp_path = $file['tmp_name'];
    $to = './' . $conf['imgDir'] . $file['name'];
    print_r($file);

    if (is_uploaded_file($tmp_path) && rename($tmp_path, $to) == true) {
        return './' . $conf['imgDir'] . $file['name'];
    }
    return "";
    
}


$name = $_POST['name'];
$title = $_POST['title'];
$pictUrl = load_pict($_FILES['picture'], $cfg);


if ($pictUrl == "") {
    echo "error\n";
    exit(1);
}

print_r($_FILES);


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
    echo " ok";
else 
    echo " error";
$db->close();
