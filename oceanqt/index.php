<html>
    <head>
        <title>
            OceanQT
        </title>
        <link rel="stylesheet" href="./style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            const divAvant = document.getElementById("avant");
            const divArriere = document.getElementById("arriere");
            const divCacher = document.getElementById("cacher");
            const container = document.getElementById("container");
            const possiblePositions = [
                { x: 50, y: 50 },
                { x: 100, y: 100 },
                { x: 150, y: 150 },
                { x: 200, y: 200 },
                { x: 250, y: 250 }
            ];

            function moveSquare() {
                const randomPosition = possiblePositions[Math.floor(Math.random() * possiblePositions.length)];

                divCacher.style.left = `${randomPosition.x}px`;
                divCacher.style.top = `${randomPosition.y}px`;
            }
            window.addEventListener('load', () => {
                container.style.animation = "rotation 10s ease-in-out forwards";
            });

            divCacher.addEventListener("click", () => {
                moveSquare();
            });

            moveSquare();
        </script>
    </head>
    <body>
        <header>
            <nav class="nav">
                <ul>
                    <li id="home"><a href="../oceanqt/">OceanQT</a></li>
                    <li class="nav-item"><a href="../cyberquiz">CyberQuiz</a></li>
                    <li class="nav-item"><a href="../morpion/">Morpion</a></li>
                    <li class="nav-item"><a href="../credit/">Crédit</a></li>
                </ul>
            </nav>
        </header>
        <div class="header">
            <a href="./"><img src="../src/images/rfwalt.png"></a>
            <button onclick="location.href='#squelettejambe'">bas du corps</button>
            <button onclick="location.href='#estomac'">torse</button>
            <button onclick="location.href='#virus'">haut du corps</button>
        </div>
        <p style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: rgb(5, 82, 82);">
        Bienvenue sur notre application éducative et interactive dédiée à l’Océan et au corps humain.<br>
        Découvrez les fascinantes similitudes entre ces deux systèmes essentiels à la vie sur Terre.<br>
        En explorant leurs connexions, vous comprendrez l'importance cruciale de préserver l’Océan, véritable cœur bleu de notre planète.
        </p>
        <iframe style="position: absolute; top:165px; right:0px"  width="600" height="300" src="https://www.youtube.com/embed/OoVyftQqxQw" title="Podcast Frédéric Le Moigne" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>    
        </iframe>
        <br>
        <br>
        <img style="margin-left: 500px; z-index: -1; float:left" height="1500px" width="900" src="../src/images/corpscontour-removebg-preview.png">
        <div id="virus"><img style="position:absolute; left:925px; top:375px; max-width: 90px; max-height: 90px;" src="../src/images/virus.png" >
        <div class="tooltip-content">
                Toxines -> Pollution
            </div>
        </div>
        <div id="coeur"><img style="position:absolute; left:825px; top:700px; max-width: 90px; max-height: 90px;" src="../src/images/coeur.png" >
        <div class="tooltip-content">
                Coeur -> courants océaniques
            </div>
        </div>
        <div id="estomac"><img style="position:absolute; left:900px; top:800px; max-width: 100px; max-height: 100px;" src="../src/images/estomac.png" >
        <div class="tooltip-content">
                Estomac -> abysse ou zonne profonde
            </div>
        </div>
        <div id="poumons"><img style="position:absolute; left:850px; top:520px; max-width: 200px; max-height: 200px;" src="../src/images/poumons.png" >
        <div class="tooltip-content">
                Poumons -> échanges gazeux
            </div>
        </div>
        <div id="veine"><img style="position:absolute; left:770px; top:1020px; max-width: 200px; max-height: 200px;" src="../src/images/veine.png" >
        <div class="tooltip-content">
                Système nerveux -> réseaux océaniques (courants profonds de surface)
            </div>
        </div>
        <div id="squelettejambe"><img style="position:absolute; left:970px; top:1020px; max-width: 200px; height: 320px;" src="../src/images/squelettejambe.png" >
        <div class="tooltip-content">
                Squelette -> récif coralien
            </div>
        </div>
        <div id="cell"><img style="position:absolute; left:1000px; top:920px; max-width: 100px; height: 100px;" src="../src/images/cell.png" >
        <div class="tooltip-content">
                Cellules -> Plancton
            </div>
        </div>
    </body>
</html>