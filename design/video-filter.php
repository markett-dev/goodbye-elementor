<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .video-filter {
        position: relative;
        width: 100%;
        max-width: 100%; 
    }

    .video-filter video {
        width: 100%;
        height: auto; 
    }

    .video-filter-color {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(0deg, transparent 0px, var(--c1light));
    }

    .video-filter-content{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 3;
        position: absolute;
        color: aliceblue;
    }

    .video-filter-desktop{ display: inline; }
    .video-filter-mobile{  display: none; }

    @media (orientation: portrait) {
        .video-filter-desktop{ display: none; }
        .video-filter-mobile{  display: block; }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<div class="video-filter">
    <div class="video-filter-content">
        Your text here
    </div>

    <!--MIZAKE GRADIENT v1 -->
    <!--
    <div class="video-filter-color"></div>
    <div class="video-filter-color"></div>
    -->
    <div class="video-filter-color"></div>

    <video src="media/16-9.mp4" class="video-filter-desktop" autoplay muted loop></video>
    <video src="media/9-16.mp4" class="video-filter-mobile" autoplay muted loop></video>
</div>