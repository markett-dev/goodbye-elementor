<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .faq{
        padding-left: 20%;
        padding-right: 20%;
        padding-top: 2%;
        padding-bottom: 5%;
        background-color: var(--c2light);
    }

    .faq-ask {
        background-color: var(--c1dark);
        color: aliceblue;
        padding: 30px;
        width: 100%;
        border: none;
        text-align: left;
        text-transform: uppercase;
        outline: none;
        font-size: 16px;
        font-weight: bold;
        transition: 0.4s;
        border-radius: 10px;
        margin-top: 10px;
    }

    .active,
    .faq-ask:hover {
        background-color: var(--color);
    }

    .faq-response {
        background-color: #d3d3d3;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        border-radius: 10px;
    }
    .faq-response p{
        padding: 30px;
        font-size: 16px;
        color: var(--c1dark);
    }

    @media (orientation: portrait) {
        .faq{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 0;
            padding-bottom: 60px;
            background-color: var(--c1light);
        }
    }
</style>

<section class="faq">
    <div class="title-box">
        <h1 class="title">FAQ</h1>
        <h1 class="subtitle">Frequently Asked Questions simplified </h1>
    </div>

    <button class="faq-ask">The question number one</button>
    <div class="faq-response">
        <p>
            Your best response text here. It's very important and has no limits.
        </p>
    </div>

    <button class="faq-ask">The question number two</button>
    <div class="faq-response">
        <p>
            Your best response text here. It's very important and has no limits.
        </p>
    </div>

    <button class="faq-ask">The question number three</button>
    <div class="faq-response">
        <p>
            Your best response text here. It's very important and has no limits.
        </p>
    </div>

    <button class="faq-ask">The question number four</button>
    <div class="faq-response">
        <p>
            Your best response text here. It's very important and has no limits.
        </p>
    </div>

    <button class="faq-ask">The question number five</button>
    <div class="faq-response">
        <p>
            Your best response text here. It's very important and has no limits.
        </p>
    </div>

</section>

<script type="text/javascript">
    var faqEngine = document.getElementsByClassName("faq-ask");
    var i;

    for (i = 0; i < faqEngine.length; i++) {
        faqEngine[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var faq = this.nextElementSibling;
            if (faq.style.maxHeight) {
                faq.style.maxHeight = null;
            } else {
                faq.style.maxHeight = faq.scrollHeight + "px";
            }
        });
    }
</script>