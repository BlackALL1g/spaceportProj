<?php 
@include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- main fav-icon link -->
    <link rel="shortcut icon" href="../spaceportProj/favicon_io/favicon.ico" type="image/x-icon">
   
    <title>team maker</title>

    <!-- font awesome import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- local style link -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>

<?php @include 'header.php';?>


<section class="page1" style="background: url(../spaceportProj/img/1957845.jpg) no-repeat">


    <section class="team">

    <p class="heading">Meet your great team</p>

    <div class="swiper team-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
            <img src="../spaceportProj/img/328965.jpg" alt="">
                <div class="content">
                <h3>1 squad</h3>
                <p>CTO</p>
                </div>
            </div>

            <div class="swiper-slide slide">
            <img src="../spaceportProj/img/39972.jpg" alt="">
                <div class="content">
                <h3>Алиса</h3>
                <p>СIO</p>
                </div>
            </div>

            <div class="swiper-slide slide">
            <img src="../spaceportProj/img/32360.png" alt="">
                <div class="content">
                <h3>Steive Rogers and co</h3>
                <p>2 squad</p>
                </div>
            </div>

            <div class="swiper-slide slide">
            <img src="../spaceportProj/img/44863.jpg" alt="">
                <div class="content">
                <h3>Mr. Bald </h3>
                <p>Guardian</p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="../spaceportProj/img/328909.jpg" alt="">
                <div class="content">
                <h3>Super Squad</h3>
                <p>support team</p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="../spaceportProj/img/Avengers.jpg" alt="">
                <div class="content">
                <h3>Iron Man sq</h3>
                <p>Creative dep</p>
                <!-- <a href="#" class="btn">about us</a> -->
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

    </section>



</section>



<section class="page2" id="page2" style="background: url(../spaceportProj/img/1957923.jpg) no-repeat">



<p class="heading">Add new character into your team !</p>

    <section class="create">
    <form action="" method="post"   autocomplete="off">
    <div class="flex">
        <div class="inputBox">
            <span>character's name</span>
            <input type="text" placeholder="enter new name" name="name" required>
        </div>
        <div class="inputBox">
            <span>character's title</span>
            <input type="text" placeholder="enter new title" name="title" required>
        </div>
        <div class="card">

    	    <div class="drag-area">
                <span class="visible">
                    <span class="select" role="button">Drag & drop image here or Browse</span>
                </span>
			<span class="on-drop">Drop images here</span>
    		<input name="file" type="file" class="file" accept="image/*" required>
    	    </div>

            <!-- IMAGE PREVIEW CONTAINER -->
            <div class="container"></div>

        </div>

    </div>
    <input type="submit" value="create new character" name="send" class="btn">
    </form>


    </section>


</section>

    
<?php @include 'footer.php';?>

<!-- drag & drop  -->
<!-- <script src="app.js"></script> -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- drag and drop script -->
<script src="../spaceportProj/js/dragNdrop.js"></script>

<!-- javascript link -->
<script src="js/index.js"></script>
</body>
</html>