<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .logo{
        width: 100%;
        padding-left: 1%;
        padding-top: 1%;
        position: absolute;
        z-index: 1;
    }

    @media (orientation: portrait) {
        .logo{
            width: 100%;
            display: flex;
            justify-content: center;
            align-content: center;
            position: absolute;
            z-index: 1;
        }

        .logo img{
            width: 200px;   
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="logo">
    <img src="media/logo-horizontal.svg">
</section>