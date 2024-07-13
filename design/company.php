<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>    
    .company{
        padding-left: 10%;
        padding-right: 10%;
    }

    .company-container{
        display: flex;
    }

    .company-container > div {
        flex: 1 1 0;
    }

    .company-about{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        padding-right: 60px;
    }
    
    .company-about p{
        padding-bottom: 10px;
        text-align: justify;
        color: var(--c2dark);
        line-height: 1.2 !important;
    }

    .company-pics img{
        width: 100%;
    }

    .company-video{
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* 16:9 */
        height: 0;
        overflow: hidden;
    }

    .company-video iframe {
        border: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .company-prints{
        padding-left: 10%;
        padding-right: 10%;
    }

    .company-prints img{
        width: 300px;
    }

    .company .swiper-button-next, .swiper-button-prev{
        color: var(--c1light) !important;
        background-color: var(--c1dark);
        border-radius: 20px;
    }

    .company .swiper-button-next:after, .swiper-button-prev:after{
        font-size: 12px;
    }

    .company .swiper-pagination-bullet{
        background: white !important;
    }

    .company .swiper-pagination-bullet-active{
        background-color: var(--color) !important;
    }


    @media (orientation: portrait) {
        .company{
            padding-left: 0;
            padding-right: 0;
        }

        .company-container{
            display: block;
        }

        .company-about{
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .company-prints{
            padding-left: 0;
            padding-right: 0;
        }

        .company-prints img{
            width: 100%;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="company">
    <div class="company-container">

        <div class="company-about">
            <h1 class="title">About</h1>
            <div class="space10h"></div>

            <p>
                Creating effective content for your company is crucial in today's digital landscape. 
                Whether you're writing a blog post, crafting social media updates, or refining website copy, 
                the goal remains the same: engage your audience and establish a strong brand presence.
            </p>

            <p>
                Start by understanding your audience deeply. Research their demographics, interests, 
                and pain points to tailor your message effectively. Communicate your message clearly 
                and concisely, using language that is easy to understand and avoiding unnecessary jargon.
            </p>
        </div>

        <div class="swiper company-pics">
            <div class="swiper-wrapper">

                <div class="swiper-slide"><img src="media/company-image1.webp"></div>
                <div class="swiper-slide"><img src="media/company-image2.webp"></div>
                <div class="swiper-slide"><img src="media/company-image3.webp"></div>

            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</section>

<section>
    <div class="title-box">
        <h1 class="title">Company Video</h1>
        <h1 class="subtitle">Show the best angles of your company</h1>
    </div>
    <div class="company-video">
        <iframe
                title="Company Video"
                width="100%" height="100%" 
                src="https://www.youtube.com/embed/5Mja4EXJWOo"
                allowfullscreen>
        </iframe>
    </div>
</section>

<section class="company">
    <div class="title-box">
        <h1 class="title">WhatsApp Prints</h1>
        <h1 class="subtitle">Show your audience in your messengers</h1>
    </div>

    <div class="swiper company-prints">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="media/whatsapp-print.webp" data-fancybox="gallery">
                    <img src="media/whatsapp-print.webp">
                </a>
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
    var swiper = new Swiper(".company-pics", {
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
                slidesPerView: 1,
                spaceBetween: 0,
            },
        },
    });

    var swiper = new Swiper(".company-prints", {
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
                slidesPerView: 3,
                spaceBetween: 0,
            },
        },
    });
</script>