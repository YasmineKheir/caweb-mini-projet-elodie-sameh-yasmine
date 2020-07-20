<section class="content">
    <hr />

    <audio controls>
        <source src="assets/audio/audio.mp3" type="audio/mpeg">
    </audio>

    <h1>Images de fond </h1>

    <div class="definition">
        <p class="text1"><span class="definition">Définition:</span>
            La propriété <span class="css-background">CSS background</span> est une propriété raccourcie qui permet de définir les différentes valeurs des propriétés qui sont en rapport avec les arrière-plans d'un élément HTML (couleur, image, origine, taille, répétition, etc.)</p>
            <br />
            <br />
            <span class="def">La propriété Background permet donc de définir une ou plusieurs valeurs pour par exemple:</span>
        <ul class="patte">
            <li class="un">Background-position</li>
            <li class="deux">Background-color</li>
            <li class="trois">Background-image</li>
            <li class="quatre">Background-size</li>
            <li class="cinq">Background-repeat</li>
        </ul>
    </div>

    <div class="contain">
        <p> <span class="bg-size"> Background-size</span></p>
        <p class="text2">
            La propriété CSS background-size permet de préciser la taille de l'image dans l'arrière-plan.
            <br />
            <br />
            <span style="background-color: black; color: white; margin-top: 20px;">
                    div {</span><br />
            <span style="background-color: black; color: white;">background-size: x y;</span><br />
            <span style="background-color: black; color: white;">}</span>
            <br />
            <br />
            <span style="color: #336633;">x</span> représente la dimension horizontale (en pixels, em, auto, pourcentage %, etc.)
            <br />
            <span style="color: #336633;">y</span> représente la dimension verticale (en pixels, em, auto, pourcentage %, etc.)
            <br />
            La valeur <span style="color: white; background-color: black;">background-size: cover</span>fait en sorte que l'arrière-plan couvre tout le fond.
        </p>
    </div>

    <div class="code-flex">
        <div class="code">
            <div>
            .background-image{
                background-image: url(poulpe.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                height: 200px;
            }
            </div>
            <p class="remarque"> NB: la valeur"cover" obligera l'image à couvrir toute la surface, sans la déformer.
                la valeur "contain" obligera l'image à ne pas déborder de l'élément, sans la déformer.
            </p>
        </div>

        <div class="resultat">
            <div class="background-image">

            </div>
        </div>
        <p><a href="pleinecran.html" class="lien_images_de_fond">Plein écran</a></p>
    </div>

    <div class="codepen">
        <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="css,result" data-user="elodie-a" data-slug-hash="NWPOJoM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="poulpe">
        </p>
        <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    </div>

    <div class=repeat>
        <p class="tire"> <span> Background-repeat</span></p>
        <p class="text3">
            La propriété CSS background-repeat permet d'afficher plusieurs images en arrière-plan. Elles sont disposées dans un même élément cumulant les valeurs à l'intérieur des propriétés <span style="background-color: black; color: white;">
                    background-image</span>, <span style="background-color: black; color: white;">
                    background-position</span> et <span style="background-color: black; color: white;">
                    background-repeat</span>.
            <br /><br /> Tout en utilisant la propriété <span style="background-color: black; color: white;">
                    background-image</span> et en modifiant les valeurs, on peut avoir un effet graphique sympa sur nos images!
        </p>
    </div>


    <div id="papillon" class="box">

    </div>
</section>