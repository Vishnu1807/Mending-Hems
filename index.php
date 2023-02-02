<?php
session_start();
require_once("utils/Db.php");
$db = Db::getInstance();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="dist/output.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/pattern.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="js/anim.js" defer></script>
  <title>Mending-Hems</title>
</head>
<!-- <style>
    /* for debugging purpose */
    * {
      border: 1px solid red !important;
    }
  </style> -->

<body data-scroll-container class="font-roboto">
  <!-- nav -->
  <?php include_once "nav.php" ?>
  <!-- slider -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- slide-1 -->
      <div class="swiper-slide flex p-20 md:p-32 items-center justify-center bg-cover bg-no-repeat bg-center" style="background-image: url(images/slider-1.jpg);">
        <div class="desc select-none active:cursor-grabbing capitalize text-white font-raleway flex flex-col items-center justify-center">
          <p class="text-3xl">Step inside the world of pineri</p>
          <p class="md:text-5xl lg:text-7xl mt-3 m-6 md:mb-9">
            Dress Outside box
          </p>
          <div class="btn bg-white text-sm md:text-md p-2 md:p-3 shadow-md text-black">
            <p>Discover unique Gifts</p>
          </div>
        </div>
      </div>
      <!-- slide-2 -->
      <div class="swiper-slide flex p-20 md:p-32 items-center justify-center bg-cover bg-no-repeat bg-center" style="background-image: url(images/slider-2.jpg);">
        <div class="desc select-none active:cursor-grabbing capitalize text-white font-raleway flex flex-col items-center justify-center">
          <p class="text-3xl">Step inside the world of pineri</p>
          <p class="md:text-5xl lg:text-7xl mt-3 m-6 md:mb-9">
            The porttrait gallery
          </p>
          <div class="btn bg-white text-sm md:text-md p-2 md:p-3 shadow-md text-black">
            <p>Discover FW22 collections</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- top-products -->
  <div class="grid grid-cols-12">
    <div class="col-span-12 p-6 md:p-0 md:col-span-4 flex items-center justify-start md:justify-center">
      <div class="title text-4xl md:text-5xl">
        <p>Hand</p>
        <p>stitched</p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-8">
      <div class="swiper mySwiper-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide bg-cover bg-no-repeat p-32 md:p-52 relative flex items-center justify-center" style="background-image: url(images/s6.png);">
            <div class="absolute font-raleway bottom-0 bg-white shadow-md text-center p-3 w-60 md:w-96 m-3">
              <p>OutFits</p>
            </div>
          </div>
          <div class="swiper-slide bg-cover bg-no-repeat p-32 md:p-52 relative flex items-center justify-center" style="background-image: url(images/s7.png);">
            <div class="absolute font-raleway bottom-0 bg-white shadow-md text-center p-3 w-60 md:w-96 m-3">
              <p>Fashion</p>
            </div>
          </div>
          <div class="swiper-slide bg-cover bg-no-repeat p-32 md:p-52 relative flex items-center justify-center" style="background-image: url(images/s1.jpg);">
            <div class="absolute font-raleway bottom-0 bg-white shadow-md text-center p-3 w-60 md:w-96 m-3">
              <p>Suits</p>
            </div>
          </div>
          <div class="swiper-slide bg-cover bg-no-repeat p-32 md:p-52 relative flex items-center justify-center" style="background-image: url(images/s4.jpg);">
            <div class="absolute font-raleway bottom-0 bg-white shadow-md text-center p-3 w-60 md:w-96 m-3">
              <p>Sweaters</p>
            </div>
          </div>
          <div class="swiper-slide bg-cover bg-no-repeat p-32 md:p-52 relative flex items-center justify-center" style="background-image: url(images/s7.png);">
            <div class="absolute font-raleway bottom-0 bg-white shadow-md text-center p-3 w-60 md:w-96 m-3">
              <p>Pants</p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-2"></div>
      </div>
    </div>
  </div>
  <!-- options -->
  <div class="grid grid-cols-12 mt-3 text-white gap-2">
    <div class="col-span-12 md:col-span-8 capitalize p-20 md:p-32 text-center bg-gradient-to-tr from-red-800 to-rose-800">
      <p class="text-3xl md:text-5xl font-raleway">i know my design</p>
      <button class="bg-white text-black px-3 py-2 font-raleway mt-3">
        Upload
      </button>
    </div>
    <div class="col-span-12 md:col-span-4 grid gap-2 grid-cols-1 grid-rows-2">
      <div class="row-span-1 p-3 md:p-0 flex items-center justify-center shadow-md bg-gradient-to-bl from-red-800 to-rose-800">
        <button class="bg-white text-black px-3 py-2 font-raleway">
          Design By Myself
        </button>
      </div>
      <div style="background-image: url(images/fabric.jpg);" class="row-span-1 flex items-center justify-center shadow-md">
        <button class="bg-white text-black px-3 py-2 font-raleway">
          Browse Fabrics
        </button>
      </div>
    </div>
  </div>
  <!-- fit chart -->
  <div class="">
    <!-- slider -->
    <div class="title text-2xl text-center p-3 mt-3">
      <p>Suit Fits</p>
    </div>
    <div class="swiper mySwiper-7">
      <div class="swiper-wrapper">
        <div class="swiper-slide flex flex-col md:flex-row items-center justify-center">
          <img src="images/fit-1.jpg" alt="" class="md:w-1/2">
          <div class="grow"></div>
          <div class="bg-rose-600 mt-3 md:mt-0 font-raleway text-white max-w-fit p-3 md:text-3xl font-medium">
            <p>Modern Fit</p>
          </div>
        </div>
        <div class="swiper-slide flex flex-col md:flex-row items-center justify-center">
          <img src="images/fit-2.jpg" alt="" class="md:w-1/2">
          <div class="grow"></div>
          <div class="bg-rose-600 mt-3 md:mt-0 font-raleway text-white max-w-fit p-3 md:text-3xl font-medium">
            <p>Classic Fit</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- recent items -->
  <div class="">
    <div class="title text-2xl text-center p-3">
      <p>BEST STITCHING - RECENT VIEW</p>
    </div>
    <div class="items w-full">
      <div class="swiper mySwiper-3">
        <div class="swiper-wrapper">
          <?php
          $query = "SELECT products.id ,products.name, products.price, users.username as publisher, SUBSTRING_INDEX(images, ',', 1) AS image FROM products INNER JOIN users ON products.publisher = users.id ORDER BY products.price DESC LIMIT 3";
          $result = $db->query($query);
          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="swiper-slide bg-cover bg-no-repeat p-32 md:p-52 relative flex items-center justify-center" style="background-image: url(<?php echo $row['image'] ?>);">
                <a href="product.php?id=<?php echo $row['id'] ?>" class="absolute font-raleway bottom-0 bg-white border capitalize shadow-lg p-3 w-60 md:w-96 m-3">
                  <div class="">
                    <p class="font-medium"><?php echo $row['name'] ?></p>
                    <p class="text-xs"><?php echo $row['publisher'] ?></p>
                    <p class="font-medium text-stone-700"><?php echo $row['price'] ?> ₹</p>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
        <div class="swiper-pagination-2"></div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer class="bg-stone-100 grid grid-cols-12 mt-3">
    <div class="col-span-12 md:col-span-6 grid grid-cols-6 text-sm">
      <div class="col-span-3 md:col-span-2 p-3">
        <p class="font-semibold font-raleway uppercase">Customer service</p>
        <div class="links flex flex-col mt-3">
          <a href="#">FAQ</a>
          <a href="#">Legal Gurentee</a>
          <a href="#">Refunds</a>
          <a href="#">Method of payments</a>
        </div>
      </div>
      <div class="col-span-3 md:col-span-2 p-3">
        <p class="font-semibold font-raleway uppercase">Customer service</p>
        <div class="links flex flex-col mt-3">
          <a href="#">FAQ</a>
          <a href="#">Legal Gurentee</a>
          <a href="#">Refunds</a>
          <a href="#">Method of payments</a>
        </div>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 p-3">
      <p class="font-medium uppercase font-raleway">
        Sign up to our newsletter
      </p>
      <div class="flex mt-3">
        <input type="text" name="" class="border grow px-3 py-2" />
        <button class="bg-stone-800 text-white px-3 py-2">Subscribe</button>
      </div>
      <p class="text-xs mt-3">
        Your personal data will be used to provide you with the Newsletter
        service that you have specifically requested. Refer to the privacy
        policy for more information
      </p>
    </div>
    <div class="col-span-12 text-center text-xs py-3 border-t">
      © 2023 Mending Industries S.R.L. All Rights Reserved
    </div>
  </footer>
</body>

</html>