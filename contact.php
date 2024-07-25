<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes-Booking - CONTACT</title>
    <?php require('inc/links.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus delectus ducimus suscipit, <br> pariatur laudantium quam, labore vitae id minus praesentium mollitia unde veritatis porro! Laborum!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6024112599252!2d110.40965967587759!3d-7.055915469147348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708be2949fe419%3A0xfd45b0df424fa24a!2sBPSDMD%20Provinsi%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1721623077682!5m2!1sid!2sid" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h5>Address</h5>

                        <a href="https://maps.app.goo.gl/NZbL1sxTHK38Wwcv6" target="_blank" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill">Jl. Setiabudi No.201A, Srondol Kulon, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50263</i>
                        </a>

                        <h5>Call us</h5>
                        <a href="tel: +62 81215139093" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +62 81215139093</a>
                        <br>
                        <a href="tel: +62 81215139093" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +62 81215139093</a>
                        
                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: ask.aflahbadrus1@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill">ask.aflahbadrus1@gmail.com</i>
                        </a>

                        <h5>Follow us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                        </a>

                        <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                        </a>

                    </div>
                </div>
            
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadown-none ">
                            </div>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadown-none ">
                            </div>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadown-none ">
                            </div>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadown-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem assumenda velit aut ad repellendus aliquid.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Carousel -->

    
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: true,
            },
        });
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
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
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>