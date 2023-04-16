<?php 
$dir = scandir("../spaceportProj/img");
print_r($dir);
print_r(count($dir));
if (count($dir) != 0) {
    $path = $dir[random_int(0, count($dir))];
    print_r($path);
}