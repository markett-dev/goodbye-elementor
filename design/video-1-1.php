<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .video-1-1{
        display: flex;
        padding-left: 10%;
        padding-right: 10%;
        padding-top: 5%;
        padding-bottom: 5%;
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
    }

    @media (orientation: portrait) {
        .video-1-1{
            display: block;
            padding-left: 10px;
            padding-right: 10px;
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
<div class="video-1-1">
    <div>
        <video src="media/1-1.mp4" autoplay muted loop controls></video>
    </div>

    <div class="video-1-1-infos">
        <h1 class="title">Your best title about the video</h1>
        <div class="space30h"></div>

        <p>
            Claro, aqui vai um texto aleatório para você: "Num universo de possibilidades infinitas, 
            onde as estrelas dançam em galáxias desconhecidas e os ventos sussurram segredos ancestrais, 
            encontramos a essência da existência. Entre sonhos tecidos com fios de luz e esperança, 
            navegamos pelos mares do tempo, onde cada onda é uma história por contar e cada estrela 
            cadente é um desejo em busca de realização. No silêncio profundo da noite estelar, 
            os pensamentos ecoam como constelações distantes, formando padrões de significados entrelaçados.
        </p>

        <div class="space30h"></div>
        <a href="#" class="btn">Your call to action</a>
    </div>
</div>
