<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes-Booking - About</title>
    <?php require('inc/links.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>

</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>


    <!-- Carousel -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus delectus ducimus suscipit, <br> pariatur laudantium quam, labore vitae id minus praesentium mollitia unde veritatis porro! Laborum!
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Laboriosam hic quos commodi expedita repellendus! Animi ipsa neque doloribus et
                    rerum dolorem similique beatae culpa esse quos consequuntur, nulla soluta sunt.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2 order-md-2">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/features/mess.svg" width="70px">
                    <h4 class="mt-3">50+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/features/customer.svg" width="70px">
                    <h4 class="mt-3">200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/features/rating.svg" width="70px">
                    <h4 class="mt-3">150+ Rewiews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/features/staff.svg" width="70px">
                    <h4 class="mt-3">50+ Rooms</h4>
                </div>
            </div>
        </div>
    </div>
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
    <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>

    </div>
</div>
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidePerView: 4,
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
              320: {
                slidesPerView: 1,
              },
              640: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 3,
              },
              1024: {
                slidesPerView: 3,
              },
            }
  });
</script>
</body>

</html>