

<?php


    $db = mysqli_init();
    $arr = array();
    // if (!$db) exit (404);
    // print_r($db);
    // if ($db->connect('localhost', 'root', '', 'team_db')) 
    // {
    //     $arr = $db->execute_query("select * from `hero`")->fetch_all();
    // }
    // print_r($arr);

?>

<?php

// // it works, but  scummer can make sql injection.

// $conn = mysqli_connect('localhost','root','','team_db');

// if(isset($_POST['send'])){

//     $name =$_POST['name'];
//     $title =$_POST['title'];
//     $picture =$_POST['picture'];
    
//     $insert = "INSERT INTO `hero`(`name`, `title`, `picture`) VALUES ('$name','$title','$picture')";
    
//     mysqli_query($conn, $insert);

//     header('location:index.php');
    
// }

?>