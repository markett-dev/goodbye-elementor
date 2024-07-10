<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .hello-world {
        height: auto;
        padding-bottom: 60px;
    }

    .hello-world .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 30px;
    }

    .hello-world .container .column {
        background-color: var(--c2light);
        border-radius: 20px;
        padding: 30px;
    }

    .hello-world .container .column .icon {
        color: var(--c1dark);
        text-align: center;
        font-size: 80px;
        padding-bottom: 20px;
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
                Claro, aqui vai um texto aleatório para você: "Num universo de possibilidades infinitas, onde as
                estrelas dançam em galáxias desconhecidas e os ventos sussurram segredos ancestrais, encontramos a
                essência da existência. Entre sonhos tecidos com fios de luz e esperança, navegamos pelos mares do
                tempo, onde cada onda é uma história por contar e cada estrela cadente é um desejo em busca de
                realização. No silêncio profundo da noite estelar, os pensamentos ecoam como constelações distantes,
                formando padrões de significados entrelaçados.
            </p>
        </div>

        <div class="column">
            <div class="icon">
                <i class="ph-duotone ph-angle"></i>
            </div>

            <h1>UI/UX</h1>
            <p>
                Claro, aqui vai um texto aleatório para você: "Num universo de possibilidades infinitas, onde as
                estrelas dançam em galáxias desconhecidas e os ventos sussurram segredos ancestrais, encontramos a
                essência da existência. Entre sonhos tecidos com fios de luz e esperança, navegamos pelos mares do
                tempo, onde cada onda é uma história por contar e cada estrela cadente é um desejo em busca de
                realização. No silêncio profundo da noite estelar, os pensamentos ecoam como constelações distantes,
                formando padrões de significados entrelaçados.
            </p>
        </div>

        <div class="column">
            <div class="icon">
                <i class="ph-duotone ph-asclepius"></i>
            </div>

            <h1>No Plugins</h1>
            <p>
                Claro, aqui vai um texto aleatório para você: "Num universo de possibilidades infinitas, onde as
                estrelas dançam em galáxias desconhecidas e os ventos sussurram segredos ancestrais, encontramos a
                essência da existência. Entre sonhos tecidos com fios de luz e esperança, navegamos pelos mares do
                tempo, onde cada onda é uma história por contar e cada estrela cadente é um desejo em busca de
                realização. No silêncio profundo da noite estelar, os pensamentos ecoam como constelações distantes,
                formando padrões de significados entrelaçados.
            </p>
        </div>
    </div>
</section>