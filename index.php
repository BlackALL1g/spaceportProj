<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>team maker</title>

    <!-- main fav-icon link -->
    <link rel="shortcut icon" href="./style/favicon_io/android-chrome-512x512.png" type="image/x-icon">
    <!-- font awesome import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- local style link -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>

<?php @include 'header.php';?>


<section class="page1" id="page1" style="background: url(./img/1957845.jpg) no-repeat">


<?php 
$db = mysqli_init();
if ($db->real_connect('localhost', 'root', '', 'team_database')):

    $charset = mysqli_character_set_name($db);
    mysqli_set_charset($db, 'utf8');
    
    $arr = $db->query("SELECT * FROM `hero` order by id asc");
    if (!$arr) echo "what!?";
    else $arr = $arr->fetch_all();?>
    <section class="team">

    <p class="heading">Meet your great team</p>

    <div class="swiper team-slider">

    <div class="swiper-wrapper">

        <?php foreach ($arr as $key => list($id, $name, $title, $picture)): ?>
            <div class="swiper-slide slide">

                <img src="<?php echo $picture;?>" alt="img">

                <div class="content">
                <h3><?php echo $name;?></h3>
                <p><?php echo $title; ?></p>

                </div>
            </div>
        <?php endforeach;?>
    </div>

<div class="swiper-pagination"></div>   
</div>

    </section>

    <!-- spare option in case db doesn't work -->

<?php else:?>

    <section class="team">

    <p class="heading">Meet your great team</p>

    <div class="swiper team-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
            <img src="./img/myheroes/44843.jpg" alt="">
                <div class="content">
                <h3>_Тимур_и_его_команда_</h3>
                <p>front</p>
                </div>
            </div>

            <div class="swiper-slide slide">
            <img src="./img/myheroes/39972.jpg" alt="">
                <div class="content">
                <h3>_Маша_Иванова_</h3>
                <p>middle</p>
                </div>
            </div>

            <div class="swiper-slide slide">
            <img src="./img/myheroes/32360.png" alt="">
                <div class="content">
                <h3>_Иван_и_КО_</h3>
                <p>Back</p>
                </div>
            </div>

            <div class="swiper-slide slide">
            <img src="./img/myheroes/328909.jpg" alt="">
                <div class="content">
                <h3>_Кулагин_и_Партнёры_</h3>
                <p>Support</p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./img/myheroes/44863.jpg" alt="">
                <div class="content">
                <h3>_Чей-то_сын_</h3>
                <p>Leader</p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./img/myheroes/328965.jpg" alt="">
                <div class="content">
                <h3>_Седьмой_"Б"_</h3>
                <p>Heroes</p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./img/myheroes/4408133.jpg" alt="">
                <div class="content">
                <h3>_Лариса_</h3>
                <p>_Всемогущая_</p>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

    </section>



<?php endif;?>
</section>



<section class="page2" id="page2" style="background: url(./img/1957923.jpg) no-repeat">

<p class="heading">Add new character into your team !</p>

    <section class="create">
    <form action="./api/addHeroes.php" method="post" autocomplete="off" id="addform" enctype="multipart/form-data">
    <div class="flex">
        <div class="inputBox">
            <span>character's name</span>
            <input type="text" placeholder="enter new name" name="name" required/>
        </div>
        <div class="inputBox">
            <span>character's title</span>
            <input type="text" placeholder="enter new title" name="title" required/>
        </div>

        <div class="card">

    	    <div class="drag-area">
                <span class="visible">
                    <span class="select" role="button">Drag & drop image here or Browse</span>
                </span>
			<span class="on-drop">Drop images here</span>
    		<input type="file" class="file" accept="image/png, image/jpeg, image/jpg, image/pdf" alt="" name="picture" enctype='multipart/form-data' required/>

            </div>

            <!-- IMAGE PREVIEW CONTAINER -->
            <div class="container" id="container" accept="image/png, image/jpeg, image/jpg, image/pdf" alt="" name="container">

            </div>

        </div>

    </div>
    <input type="submit" value="create new character" name="send" class="btn" id="addform_btn"/>
    </form>


    </section>


</section>

    
<?php @include 'footer.php';?>



<!-- Swiper JS link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- swiper & navBar script -->
<script src="./js/swiper.js"></script>

<!-- Submit form data via Ajax -->
<script src="./js/submitAjax.js"></script>

<!-- drag and drop script -->
<script src="./js/dragNdrop.js"></script>

</body>
</html>