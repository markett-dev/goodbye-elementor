<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .superbanner img{
        width: 100%;
    }

    .superbanner-desktop{ display: block; }
    .superbanner-mobile{  display: none; }

    @media (orientation: portrait) {
        .superbanner-desktop{ display: none; }
        .superbanner-mobile{  display: block; }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="superbanner">
    <div class="superbanner-desktop">
        <img src="media/superbanner-desktop.png">
    </div>

    <div class="superbanner-mobile">
        <img src="media/superbanner-mobile.png">
    </div>
</section>