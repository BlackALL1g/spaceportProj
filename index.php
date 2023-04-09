<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set of fav-icon links  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- main fav-icon link -->
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">
   
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


<!-- 
<div class="swiper container-main">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background: url(../spaceportProj/img/39972.jpg) no-repeat">
            <div class="content">
            <h3 class="name">name</h3>
            <p class="title">title</p>
            <p class="length-of-service">date</p>
            </div>
        </div>
        <div class="swiper-slide slide" style="background: url(../spaceportProj/img/328965.jpg) no-repeat">
            <div class="content">
            <h3 class="name">name</h3>
            <p class="title">title</p>
            <p class="length-of-service">date</p>
            </div>
        </div>
        <div class="swiper-slide slide" style="background: url(../spaceportProj/img/44863.jpg) no-repeat">
            <div class="content">
            <h3 class="name">name</h3>
            <p class="title">title</p>
            <p class="length-of-service">date</p>
            </div>
        </div>
        <div class="swiper-slide slide" style="background: url(../spaceportProj/img/32360.png) no-repeat">
            <div class="content">
            <h3 class="name">name</h3>
            <p class="title">title</p>
            <p class="length-of-service">date</p>
            </div>
        </div>
        <div class="swiper-slide slide" style="background: url(../spaceportProj/img/328909.jpg) no-repeat">
            <div class="content">
            <h3 class="name">name</h3>
            <p class="title">title</p>
            <p class="length-of-service">date</p>
            </div>
        </div>
        <div class="swiper-slide slide" style="background: url(../spaceportProj/img/Avengers.jpg) no-repeat">
            <div class="content">
            <h3 class="name">name</h3>
            <p class="title">title</p>
            <p class="length-of-service">date</p>
            </div>
        </div>
    <div class="swiper-pagination"></div>
    </div>
</div> -->






</section>


<section class="page2" style="background: url(../spaceportProj/img/1957923.jpg) no-repeat">



<p class="heading">Add new character into your team!</p>

<div class="container-create">
<form action="" method="post">
    <div class="flex">
        <div class="inputBox">
            <span>name</span>
            <input type="text" placeholder="enter character name"  name="name" required>
        </div>
        <div class="inputBox">
            <span>title</span>
            <input type="text" placeholder="enter character title"  name="title" required>
        </div>
        <div class="inputBox">
            <span>entry date</span>
            <input type="date" placeholder="enter the date of assignment"  name="entryDate">
        </div>
    </div>
    <input type="submit" value="send message" name="send" class="btn">
</form>

</div>

<form action="" method="post">
    <div class="flex-img">
        <div class="inputBox">
            <input type="image" src="" alt="">
        </div>
    </div>
</form>



</section>

    
<?php @include 'footer.php';?>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- javascript link -->
<script src="js/index.js"></script>
</body>
</html>