<?php

$conn = mysqli_connect('localhost','root','','team_db');

if(isset($_POST['send'])){

    $name =$_POST['name'];
    $title =$_POST['title'];
    $image =$_POST['image'];
    
    $insert = "INSERT INTO `heroes`(`name`, `title`, `image`) VALUES ('$name','$title','$image')";
    
    mysqli_query($conn, $insert);

    header('location:index.php');
    
}

?>