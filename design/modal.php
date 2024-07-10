<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .modal-cta{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        height: 30vh;
    }

    #modal-example .modal-content{
        width: 50%;
    }

    @media (orientation: portrait) {
        .modal-cta{
            display: block;
            flex-direction: inherit;
            padding-left: 30px;
            padding-top: 30px;
        }

        #modal-example .modal-content{
            width: 98%;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<div id="modal-example" class="modal">
    <div class="modal-content modal-center">
        <span class="close"><i class="ph-fill ph-x-circle"></i></span>
        <div class="space20h"></div>
        <h1>Entre em contato no WhatsApp</h1>

        <div class="space30h"></div>
        <a href="https://wa.me/11993194165" target="_blank" class="btn">+55 11 99319 4165</a>
    </div>
</div>

<section class="modal-cta">
    <h1 class="title">Goodbye Elementor</h1>
    <div class="space20h"></div>

    <button onclick="openModal()" class="btn">Donate</button>
</section>

<!-- ///////////////////////// CUSTOM SCRIPTS
/////////////////////////////////////////////// -->
<script type="text/javascript">
    function openModal() {
        $("#modal-example").fadeIn();
    }
</script>