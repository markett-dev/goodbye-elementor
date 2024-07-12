<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .swiper{
        width: 100%;
        height: 100%;
    }

    .image-gallery-slide {
        background-size: cover;
        width: 100%;
        height: 100vh;
    }

    .image-gallery-1 { background-image: url(media/image-gallery1.webp); }
    .image-gallery-2 { background-image: url(media/image-gallery2.webp); }
    .image-gallery-3 { background-image: url(media/image-gallery3.webp); }
    .image-gallery-4 { background-image: url(media/image-gallery4.webp); }
    .image-gallery-5 { background-image: url(media/image-gallery5.webp); }
    .image-gallery-6 { background-image: url(media/image-gallery6.webp); }
    .image-gallery-7 { background-image: url(media/image-gallery7.webp); }
    .image-gallery-8 { background-image: url(media/image-gallery8.webp); }
    .image-gallery-9 { background-image: url(media/image-gallery9.webp); }
    .image-gallery-10 { background-image: url(media/image-gallery10.webp); }

    .swiper-button-next, .swiper-button-prev{
        color: var(--c1light) !important;
        background-color: var(--c1dark);
        border-radius: 20px;
    }

    .swiper-button-next:after, .swiper-button-prev:after{
        font-size: 12px;
    }

    .swiper-pagination-bullet{
        background: white !important;
    }

    .swiper-pagination-bullet-active{
        background-color: var(--color) !important;
    }


    @media (orientation: portrait) {
        .testimonials{
            padding-top: 10%;
            padding-left: 5%;
            padding-right: 5%;
        }

        .testimonials .swiper-pagination{
            margin-bottom: 10px;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="image-gallery">

    <div class="title-box">
        <h1 class="title">Image Gallery</h1>
        <h1 class="subtitle">10 images in your landing page is possible</h1>
    </div>

    <div class="swiper image-gallery-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="media/image-gallery1.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-1"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery2.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-2"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery3.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-3"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery4.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-4"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery5.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-5"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery6.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-6"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery7.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-7"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery8.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-8"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery9.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-9"></div></a>
            </div>
            <div class="swiper-slide">
                <a href="media/image-gallery10.webp" data-fancybox="gallery"><div class="image-gallery-slide image-gallery-10"></div></a>
            </div>



        </div>

        <!-- navigation buttons -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!-- ///////////////////////// CUSTOM SCRIPTS
/////////////////////////////////////////////// -->
<script type="text/javascript">
    var swiper = new Swiper(".image-gallery-swiper", {
        loop: false,

        autoplay: {
            delay: 8000, 
            disableOnInteraction: false, 
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
        },
    });
</script>