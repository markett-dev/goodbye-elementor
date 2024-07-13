<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .video-1-1{
        display: flex;
        padding-left: 10%;
        padding-right: 10%;
        padding-top: 5%;
        padding-bottom: 5%;
        color: var(--c1dark);
    }
    
    .video-1-1 p{
        color: var(--c2dark);
        line-height: 1.2 !important;
    }

    .video-1-1 video{
        height: 60vh;
        border-radius: 30px;
    }

    .video-1-1-infos{
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 10%;
        padding-right: 10%;
        text-align: justify;
    }

    @media (orientation: portrait) {
        .video-1-1{
            display: block;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .video-1-1 video{
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .video-1-1-infos{
            padding-left: 10px;
            padding-right: 10px;
        }

        .video-1-1-infos h1{
            padding-top: 30px;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="video-1-1">
    <div>
        <video src="media/1-1.mp4" autoplay muted loop controls></video>
    </div>

    <div class="video-1-1-infos">
        <h1 class="title">Your best title about the video</h1>
        <div class="space30h"></div>

        <p>
            Creating effective content for your company is crucial in today's digital landscape. 
            Whether you're writing a blog post, crafting social media updates, or refining website copy, 
            the goal remains the same: engage your audience and establish a strong brand presence.
        </p>

        <div class="space30h"></div>
        <a href="#" class="btn">Your call to action</a>
    </div>
</section>
