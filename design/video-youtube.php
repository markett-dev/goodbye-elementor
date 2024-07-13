<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .video-youtube{
        padding-left: 20%;
        padding-right: 20%;
        padding-bottom: 5%;
        text-align: center;
        background-color: var(--c1dark);
    }

    .video-youtube h1{
        color: var(--c2light);
    }

    .video-youtube iframe{
        border: 0;
        width: 960px;
        height: 540px;
        box-shadow: 0px 30px 40px 0px rgba(0, 0, 0, 1);
    }

    @media (orientation: portrait) {
        .video-youtube{
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 0;
        text-align: center;
        background-color: var(--c1dark);
    }
        
        .video-youtube-container{
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
        }

        .video-youtube-container iframe {
            border: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0px 30px 40px 0px rgba(0, 0, 0, 0);
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="video-youtube">

    <div class="title-box">
        <h1 class="title">Youtube Embed</h1>
        <h1 class="subtitle">Embed your favorite youtube video</h1>
    </div>

    <div class="video-youtube-container">
        <iframe 
                src="https://www.youtube.com/embed/5Mja4EXJWOo" 
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
        </iframe>
    </div>

</section>