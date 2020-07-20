<section class="content">
    <h1>Les dégradés en CSS3</h1>
        <div class="grid-container">
            <div class="img1-item">
                <img src="https://i.postimg.cc/qqXdyw4J/chameleon-384957-1920.jpg" alt="">
            </div>
            <div class="text1-item">
                <p>Les dégradés correspondent à une transition entre deux ou plusieurs couleurs,
                    qui peut être répétée et utilisés comme image de fond.
                    Ils sont générés automatiquement par le navigateur et permettre d’obtenir
                    un rendu de meilleur qualité que l’insertion d’une image lors du redimensionnement
                    de la fenêtre de navigation notamment.</p>

                <ul>3 types de dégradés peuvent être réalisés en CSS:
                    <li><code>linear-gradient</code></li>
                    <li><code>radial-gradient</code></li>
                    <li><code>conic-gradient</code></li>
                </ul>

                <ul>Pour répéter ces dégradés il suffit de rajouter le préfixe « repeating »  à chaque type de dégradé:
                    <li><code>repeating-linear-gradient</code></li>
                    <li><code>repeating-radial-gradient</code></li>
                    <li><code>repeating-conic-gradient</code></li>
                </ul>
            </div>

            <div class="img2-item">
                <img src="assets/img/simon-matzinger-unsplash_600px.jpg" alt="">
            </div>
            <div class="text2-item">
                <h2>Comment créer un dégradé en CSS ?</h2>
                <ol>
                    <li><span class="bold">Définir au moins deux couleurs à l’aide de la propriété</span> <code>background : linear-gradient(couleur1, couleur2);</code></li>
                    <li><span class="bold">Définir l’orientation du dégradé:</span>
                        <ul>
                            <li>
                                <p>en spécifiant des directions et des couleurs</p>
                                <p>Par exemple: <code>background : linear-gradient(to top left, couleur1, couleur2);</code>
                            </li>
                            <li>
                                <p>en spécifiant un angle et des couleurs:</p>
                                <ul>
                                    <li>0deg: dégradé du bas vers le haut</li>
                                    <li>90deg: degradé de gauche à droite</li>
                                    <li>180 deg: dégradé du haut vers le bas</li>
                                    <li>-90deg: dégradé de la droite vers la gauche</li>
                                </ul>
                                <p>Par exemple: <code>background : linear-gradient(45deg, couleur1, couleur2);</code>
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="img3-item">
                <p class="codepen" data-height="500" data-theme-id="dark" data-default-tab="result" data-user="elodie-a" data-slug-hash="qBExmqR" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="cloudy gradient"></p>
                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
            <div class="text3-item">
                <ul>Voici un exemple de dégradés simples, réalisés à partir de 2 couleurs en précisant les directions:
                    <li><code>right</code></li>
                    <li><code>left</code></li>
                    <li><code>top</code></li>
                    <li><code>right</code></li>
                </ul>
                <p>Vous pouvez visualiser le résultat ainsi que le code source en cliquant sur les onglets <span class="bold">Result</span>, <span class="bold">HTML</span> et <span class="bold">CSS</span></p>
            </div>

            <div class="img4-item">
                <p class="codepen" data-height="500" data-theme-id="dark" data-default-tab="css,result" data-user="elodie-a" data-slug-hash="gObvwZG" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Gradient circles"></p>
                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
            <div class="text4-item">
                <p>Ici une démonstrations des différents types de dégradés qu'il est possible de réaliser en CSS:</p>
                <ul>
                    <li><code>linear-gradient</code></li>
                    <li><code>radial-gradient</code></li>
                    <li><code>conic-gradient</code></li>
                </ul>
                <p><span class="bold">Attention: pour voir les deux sphères avec un <code>conic-gradient</code> pensez à ouvrir la page sous Google Chrome car Firefox ne reconnaît pas la propriété CSS</span> <code>conic-gradient</code>.
                    <br/>Les dernières versions de Safari et Opera reconnaissent également cette propriété CSS.</p>
            </div>

            <div class="img5-item">
                <p class="codepen" data-height="500" data-theme-id="dark" data-default-tab="css,result" data-user="elodie-a" data-slug-hash="eYmVEpL" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="transparent gradient squirrel"></p>
                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
            <div class="text5-item">
                <p>Enfin un exemple de dégradé superposé à une image de fond qui créé une impression de filtre en jouant sur la transparence des couleurs avec le rgba.</p>
            </div>

            <div class="img6-item">
                <img src="https://i.postimg.cc/rFNcKHRH/suspension-bridge-959853-640.jpg" alt="">
            </div>
            <div class="text6-item">
                <h2>Bon à savoir</h2>
                <ul class="line-height">
                    <li class="margin-bottom">Par défaut les dégradés s’affichent du haut vers le bas et les couleurs sont réparties équitablement à l’endroit où le dégradé est appliqué.</li>
                    <li class="margin-bottom">Une transparence peut être appliquée aux dégradés pour adoucir les couleurs et harmoniser le fondu entre les différentes couleurs.
                        <ul>
                            <li class="margin-top">Pour obtenir un effet de transparence pensez à renseigner les couleurs au format rgba et à jouer sur la valeur alpha (comprise entre 0 et 1):
                                <ul>
                                    <li class="margin-top">une valeur de 0 correspond à une transparence totale</li>
                                    <li>une valeur de 1 correspond à une couleur opaque.</li>
                                </ul>
                            </li>
                            <li class="margin-top">Par exemple:
                                <br/>
                                <code>background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));</code></li>
                        </ul>
                    </li>
                </ul>
                <p class="center"><span class="bold">Pour plus d’informations sur l’utilisation des propriétés CSS liées à la transparence, rendez-vous sur <?php echo '<a href="index.php?page=transparence&css='.$css.'&titre=transparence">notre page dédiée</a>' ?></span></p>
            </div>
        </div>
</section>