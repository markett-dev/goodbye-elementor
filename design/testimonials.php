<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .testimonials{
        padding-top: 5%;
        padding-bottom: 5%;
        padding-left: 10%;
        padding-right: 10%;
        background-color: #eee;
    }

    .testimonials .swiper-slide{
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .testimonial-box{
        width: 100%;
        height: auto;
        border-radius: 10px;
        color: black !important;
        border: 1px solid var(--c1dark);
        text-align: center;
        font-weight: 400;
        font-size: 16px;
        line-height: 1.5;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .testimonial-box p{
        padding-bottom: 10px;
    }

    .testimonial-box-avatar{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }

    .testimonial-box-avatar img{
        width: 50%;
        border-radius: 100px;
    }

    .testimonial-box h1{
        padding-bottom: 10px;
    }

    .testimonials .swiper-pagination-testimonials{
        text-align: center;
    }
    .testimonials .swiper-pagination-bullet{
        background: var(--c1dark) !important;
        width: 15px;
        height: 15px;
        margin-bottom: 10px !important;
    }

    .testimonials .swiper-pagination-bullet-active{
        background-color: var(--c2dark) !important;
    }

    .testimonials-info{
        text-align: center;
        font-size: 10px;
        text-transform: uppercase;
        padding-top: 30px;
    }

    .testimonials-info a{
        color: var(--c1dark);
        font-size: 10px;
        text-transform: uppercase;
        font-weight: 600;
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
<section class="testimonials">

    <div class="title-box">
        <h1 class="title">Testimonials</h1>
        <h1 class="subtitle">Your best histories of success here</h1>
    </div>

    <div class="swiper testimonials-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="testimonial-box">
                    <div class="testimonial-box-avatar">
                        <img src="https://placehold.co/500x500">
                    </div>

                    <h1>Name of person</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec efficitur consectetur convallis. Etiam aliquam turpis eget odio rhoncus sagittis. 
                        Nulla tempus turpis erat, gravida fringilla leo imperdiet at. 
                    </p>
                    <p><a href="#">Link</a></p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-box">
                    <div class="testimonial-box-avatar">
                        <img src="https://placehold.co/500x500">
                    </div>

                    <h1>Name of person</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec efficitur consectetur convallis. Etiam aliquam turpis eget odio rhoncus sagittis. 
                        Nulla tempus turpis erat, gravida fringilla leo imperdiet at. 
                    </p>
                    <p><a href="#">Link</a></p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-box">
                    <div class="testimonial-box-avatar">
                        <img src="https://placehold.co/500x500">
                    </div>

                    <h1>Name of person</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec efficitur consectetur convallis. Etiam aliquam turpis eget odio rhoncus sagittis. 
                        Nulla tempus turpis erat, gravida fringilla leo imperdiet at. 
                    </p>
                    <p><a href="#">Link</a></p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-box">
                    <div class="testimonial-box-avatar">
                        <img src="https://placehold.co/500x500">
                    </div>

                    <h1>Name of person</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec efficitur consectetur convallis. Etiam aliquam turpis eget odio rhoncus sagittis. 
                        Nulla tempus turpis erat, gravida fringilla leo imperdiet at. 
                    </p>
                    <p><a href="#">Link</a></p>
                </div>
            </div>

        </div>

        <div class="swiper-pagination-testimonials"></div>
    </div>

    <div class="testimonials-info">
        Insert information about verified testimonials here.
    </div>
</section>

<!-- ///////////////////////// CUSTOM SCRIPTS
/////////////////////////////////////////////// -->
<script type="text/javascript">
    var swiper = new Swiper(".testimonials-swiper", {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 20,

        autoplay: {
            delay: 8000, 
            disableOnInteraction: false, 
        },

        pagination: {
            el: ".swiper-pagination-testimonials",
            clickable: true,
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
</script>