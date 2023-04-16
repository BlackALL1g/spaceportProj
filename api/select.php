
<?php 
$db = mysqli_init();
if ($db->connect('localhost', 'root', '', 'team_db')):
    $arr = $db->execute_query("SELECT * FROM `hero` order by id asc");
    if (!$arr) echo "what!?";
    else $arr = $arr->fetch_all();?>  
    

        <div class="swiper-wrapper">
            <?php foreach ($arr as $key => list($id, $name, $title, $picture)): ?>
                <div class="swiper-slide slide">
                    <img src="<?php 
                        if ($picture === "" || $picture == null){
                            $dirimg = scandir("../../spaceportProj/img");
                            $path = "../spaceportProj/img/39972.jpg";
                            if (count($dirimg) != 0) {
                                $path = "../spaceportProj/img/" . $dirimg[random_int(0, count($dirimg))];
                            }
                            echo $path;
                        } 
                        else echo $picture;
                        ?>" alt="img">
                    <div class="content">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $name; ?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
<?php endif;?>
