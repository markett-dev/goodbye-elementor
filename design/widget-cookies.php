<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .cookies{
        position: fixed;
        z-index: 99;
        bottom: 0;
        padding-left: 30px;
        padding-bottom: 30px;
    }
    .cookies-card{
        background-color: #fff;
        color: black;
        border: 1px solid black;
        border-radius: 20px;
        width: 500px;
        height: auto;
        padding: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .cookies-card p{
        padding-bottom: 10px;
        color: var(--c2dark);
        line-height: 1.2 !important;
    }

    @media (orientation: portrait) {
        .cookies{
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
        }

        .cookies-card{
            width: 100%;
        }

    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<div class="cookies">
    <div class="cookies-card">
        <p>
            Nós e os terceiros selecionados não usamos cookies ou tecnologias similares no site
            para coletar seus dados. Todos os dados coletados no site são feitos mediante a inserção 
            segura dos dados, por meio do usuário e não são salvos no site e tampouco compartilhados.
        </p>

        <p>
            Você pode navegar livremente a qualquer momento.
        </p>

        <div class="space20h"></div>
        <a class="btn" onclick="cookieOff()">Ok, aceito continuar.</a>
    </div>
</div>

<!-- ///////////////////////// CUSTOM SCRIPTS
/////////////////////////////////////////////// -->
<script type="text/javascript">
    function cookieOff() {
        $(".cookies").fadeOut();
        localStorage.setItem("cookiesDisabled", true);
    }

    $(document).ready(function() {
        if (localStorage.getItem("cookiesDisabled")) {
            $(".cookies").hide(); 
        }
    });
</script>