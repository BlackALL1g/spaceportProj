

<?php

$cfg = [
    "hostname" => 'localhost',
    "username" => 'root',
    "password" =>  '',
    "database" => 'team_db',
    "imgDir" => './img/myheroes/'
];

// the most problematic function

function load_pict($file, $conf) {
    if ($file['size']<1000000) {
            $tmp_path = $file['tmp_name'];
            $to = '.'.$conf['imgDir'] . $file['name'];
            print_r($file);
            if (is_uploaded_file($tmp_path) && rename($tmp_path, $to)) {
                return $conf['imgDir'] . $file['name'];
            }
    } else {
        echo"size of picture is too big\n";
    }


    return "";
}

$name = $_POST['name'];
$title = $_POST['title'];
$pictUri = load_pict($_FILES['picture'], $cfg);


if ($pictUri == "") {
    echo "error ( ! picture move )\n";
    exit(1);
}else{
    echo "the peacture's been moved successfully\n";
}


$sql = "INSERT INTO `hero`(`name`, `title`, `picture`) VALUES ('$name','$title','$pictUri')";

// check
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
