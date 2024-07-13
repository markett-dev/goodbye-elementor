<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .hello-world {
        height: auto;
        padding-bottom: 60px;
        padding-left: 10%;
        padding-right: 10%;
    }

    .hello-world .container {
        display: flex;
        gap: 30px;
    }

    .hello-world .container .column {
        background-color: var(--c2light);
        border-radius: 30px;
        padding: 30px;
        width: 100%;
        height: auto;
    }

    .hello-world .container .column .icon {
        color: var(--c1dark);
        text-align: center;
        font-size: 80px;
        padding-bottom: 30px;
    }

    .hello-world .container .column h1 {
        color: var(--c1light);
        font-size: 32px;
        font-weight: 700;
        padding-bottom: 10px;
    }
    .hello-world .container div p {
        color: var(--light);
        font-size: 14px;
        padding-bottom: 60px;
    }

    @media (orientation: portrait) {
        .hello-world {
            height: auto;
            padding-bottom: 60px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .hello-world .container {
            display: block;
            padding-left: 20px;
            padding-right: 20px;
        }
        .hello-world .container .column {
            margin-bottom: 20px;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="hello-world">

    <div class="title-box">
        <h1 class="title">How it works</h1>
        <h1 class="subtitle">The fast way to create landingpages </h1>
    </div>

    <div class="container">
        <div class="column">
            <div class="icon">
                <i class="ph-duotone ph-acorn"></i>
            </div>

            <h1>Pure CSS/HTML5</h1>
            <p>
                Creating effective content for your company is crucial in today's digital landscape. 
                Whether you're writing a blog post, crafting social media updates, or refining website copy, 
                the goal remains the same: engage your audience and establish a strong brand presence.
            </p>
        </div>

        <div class="column">
            <div class="icon">
                <i class="ph-duotone ph-angle"></i>
            </div>

            <h1>UI/UX</h1>
            <p>
                Creating effective content for your company is crucial in today's digital landscape. 
                Whether you're writing a blog post, crafting social media updates, or refining website copy, 
                the goal remains the same: engage your audience and establish a strong brand presence.
            </p>
        </div>

        <div class="column">
            <div class="icon">
                <i class="ph-duotone ph-asclepius"></i>
            </div>

            <h1>No Plugins</h1>
            <p>
                Creating effective content for your company is crucial in today's digital landscape. 
                Whether you're writing a blog post, crafting social media updates, or refining website copy, 
                the goal remains the same: engage your audience and establish a strong brand presence.
            </p>
        </div>
    </div>
</section>