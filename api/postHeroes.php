

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
print_r($_FILES['container']);

$cfg = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' =>  '',
    'database' => 'team_database',
    // 'port' => 3307,
    // 'dir' => '/opt/lampp/htdocs/workSpace2/teamMaker/',
    'imgDir' => './img/myheroes/'
];

// the most problematic function

function load_pict($file, $conf) {
    if ($file['size']<2000000) {

        // Make sure that the form was submitted with the POST method before processing the file upload
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check if the file input is set and there are no errors
            if (isset($file) && $file['error'] == UPLOAD_ERR_OK) {
            // Check the file type and size
            $allowed_types = array('jpeg', 'jpg', 'png', 'gif');
            $file_type = pathinfo($file['name'], PATHINFO_EXTENSION);
            // $file_size = $file['size'];
        
            if (!in_array(strtolower($file_type), $allowed_types)) {
                echo "Invalid file type ";
            } else {
                // Move the uploaded file to the specified directory
                // $target_dir = $conf['dir']."img/myheroes/";
                // chmod($target_dir, 0777);
                // $target_file = $target_dir . basename($file['name']);
                $target_file = '.'.$conf['imgDir'] . basename($file['name']);
                if (move_uploaded_file($file['tmp_name'], $target_file)) {

                return $conf['imgDir'] . $file['name'];
                }
                
                // Redirect back to the homepage (doesn't work)
                // header("Location: ./api/postHeroes.php?uploadSuccess");
            }
            } else {
            echo "File upload failed";
            }
        } else {
            echo "Invalid request method";
        }
    

    } else {
        echo"size of picture is too big\n";
    }
    

    return "";
}

$name = $_POST['name'];
$title = $_POST['title'];
// if ($_FILES['container'] ===) {
//     # code...
// }
$pictUri = load_pict($_FILES['picture'], $cfg);


if ($pictUri == "") {
    echo "\nerror ( picture didn't move )\n";
    exit(1);
}else{
    echo "the picture's been moved successfully\n";
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

$charset = mysqli_character_set_name($db);
mysqli_set_charset($db, 'utf8');

if ( mysqli_query($db, $sql) !== false )
    echo " ok";
else 
    echo " error";
$db->close();
