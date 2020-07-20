<section class="content">
    <h1>Les animations en CSS3</h1>
    <!--<div class="cloud"></div>-->
    <article class="article">
        <div class="intro">
            <p class="accroche">Aujourd’hui grâce aux nouvelles spécificités du CSS3
                nous avons la possibilité d’améliorer l’expérience utilisateur des internautes
                en intégrant des animations fluides et de qualité aux sites web utilisant
                la technologie HTML5 et ce sans passer par du JavaScript.
            <br>
                <br>

                La question de la performance des animations CSS ou JavaScript a souvent été débattue
                et s'il n'est pas évident de trancher sur la question, le CSS est généralement utilisé
                pour réaliser des animations basiques tandis que le JavaScript conviendra davantage pour des animations complexes.
            </p>
        </div>
        <div class="parallax"></div>

        <div class="intro">
            <h2>Comment fonctionnent les animations en CSS ?</h2>

            <div class="accroche">Les animations CSS visent à présenter les transitions d’états par lesquelles
                passe un élément entre son état initial et son état final. Selon l’effet désiré
                il est possible d’animer un élément en modifiant graduellement son style en utilisant:
                <ul>
                    <li>des propriétés CSS adaptées</li>
                    <li>des keyframes</li>
                </ul>
            </div>
        </div>

        <div class="animation-properties">
            <h2>Les propriétés CSS à connaître</h2>
            <ul class="accroche">
                <li>
                    <code>animation</code>
                    <p>Pour créer une séquence d'animation en CSS il faut définir un nom et une durée que l'on applique à l'élement que l'on désire animer. D'autres propriétés d'animation peuvent être ajoutées au besoin, vous les trouverez listées ci-dessous. Ces propriétés définiront le style de l'élément avant l'animation.</p>
                </li>
                <li>
                    <code>@keyframes</code>
                    <p>Les règles définies via les keyframes permettent de définir l'apparence de l'élément durant la séquence d'animation de son état initial à son état final.</p>
                </li>
                <li>
                    <code>animation-name</code>
                    <p>Définir un nom pour l'animation qui sera utilisé pour les règles keyframes</p>
                </li>
                <li>
                    <code>animation-duration</code>
                    <p>Détermine la durée d'une séquence d'animation.</p>
                </li>
                <li>
                    <code>animation-delay</code>
                    <p>Détermine le délai entre le chargement de l'élément et le début du lancement de l'animation</p>
                </li>
                <li>
                    <code>animation-iteration-count</code>
                    <p>Détermine combien de fois l'animation doit être répétée.</p>
                </li>
                <li>
                    <code>animation-direction</code>
                    <p>Permet de modifier la direction du déroulement de l'animation à chaque étape durant une séquence ou de réinitialiser l'animation et de la répéter.</p>
                </li>
                <li>
                    <code>animation-timing-function</code>
                    <p>Permet de définir le timing le l'animation en définissant des transitions à l'aide de keyframes.</p>
                </li>
                <li>
                    <code>animation-fill-mode</code>
                    <p>Détermine les valeurs appliquée à l'animation avant et après son exécution.</p>
                </li>
                <li>
                    <code>animation-play-state</code>
                    <p>Permet de mettre l'animation en pause et de reprendre la séquence d'animation.</p>
                </li>
            </ul>
            <div class="demo"></div>
        </div>

        <div class="parallax-two"></div>

        <div class="keyframes">
            <h2>Réaliser des animations en utilisant des keyframes</h2>
            <ol class="accroche">
                <p>Afin d'animer un élément en CSS à l'aide des keyframes, trois étapes sont nécessaires:</p>
                <li><strong>Donnez un nom à l'animation</strong> que vous souhaiter mettre en place avec la propriété CSS <code>animation-name : nom</code>
                <li><strong>Définissez la durée de l'animation</strong> en secondes ou millisecondes: <code>animation-duration: 1s</code></li>
                <li><strong>Écrivez vos règles keyframes</strong> en spécifiant le nom de l'animation, les propriétés CSS à modifier pour chaque état: initial, intermédiaire, final: <code>@keyframes nom{}</code> </li>
            </ol>
            <div class="demo">
                <h3>Démonstration</h3>
                <p class="codepen" data-height="397" data-theme-id="dark" data-default-tab="css,result" data-user="elodie-a" data-slug-hash="QWwGzzx" style="height: 397px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="QWwGzzx"></p>
                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
        </div>

        <div class="parallax-three"></div>

        <div class="browser-compatibility">
            <h2>La reconnaissance des animations CSS par les navigateurs</h2>
            <p class="accroche">Les animations CSS sont reconnues par l'ensemble des navigateurs aujourd'hui,
                mise à part Internet Explorer 9 et ses versions antérieures.
                Dans ce cas une solution peut être mise en oeuvre en ajoutant un préfixe spécifique <code>-webkit-</code>
            </p>
            <h3>Compatibilité des animations CSS avec les navigateurs web</h3>
            <figure>
                <img class="caniuse-img" src="assets/img/animation-browser-support.png" alt="tableau de compatibilité des animations CSS selon les navigateurs web">
                <figcaption>Source: <a href="https://caniuse.com/#feat=css-animation" target="_blank">https://caniuse.com/#feat=css-animation</a></figcaption>
            </figure>
        </div>

    </article>
    <aside class="aside">
        <ul class="accroche">
            <li>Animation 1</li>
            <li>Animation 2</li>
            <li>Animation 3</li>
            <li>Animation 4</li>
        </ul>
    </aside>
</section>


