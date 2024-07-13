<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .discount{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 50vh;
        background: linear-gradient(0deg, var(--color) 0px, var(--c1dark));
    }

    .discount h1, p{
        color: var(--c2light);
    }

    .discount-box{
        width: 600px;
        background: linear-gradient(0deg, var(--color) 0px, var(--c1dark));
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0px 30px 40px 0px rgba(0, 0, 0, .5);
    }

    .discount-box .title-super{
        padding-bottom: 10px;
    }

    .discount-off{
        text-decoration: line-through;
    }

    @media (orientation: portrait) {
        .discount{
            height: 70vh;
            padding-left: 20px;
            padding-right: 20px;
        }

        .discount-box{
            width: 100%;
            padding: 30px;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="discount">
    <div class="discount-box">
        <h1 class="title-super">Promo!</h1>
        <p>
            Your best text to offer any thing!
        </p>

        <div class="space30h"></div>
        <h1 class="subtitle discount-off">U$300</h1>
        <h1 class="title">Only: U$1000</h1>

        <div class="space30h"></div>
        <a href="#" class="btn">Your call to action</a>
    </div>
</section>