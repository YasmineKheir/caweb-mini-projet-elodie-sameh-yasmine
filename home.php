<section class="content">
    <div id="homedescription">
        <p>Bienvenue à</p>
        <h1>Univers’Elles</h1>
        <p>Quoi de mieux qu’un voyage universel pour découvrir le CSS3 et le HTML !</p>
    </div>

    <div class="diaporama">
    <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <!--<div class="numbertext">1 / 3</div>-->
                <img src="https://etudiants-caweb.u-strasbg.fr/1920/kheir/Kheir/1.%20ELODIE.png" style="width:100%">
                <!--<div class="text">Caption Text</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">2 / 3</div>-->
                <img src="https://etudiants-caweb.u-strasbg.fr/1920/kheir/Kheir/3.%20SAMEH.png" style="width:100%">
                <!--<div class="text">Caption Two</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img src="https://etudiants-caweb.u-strasbg.fr/1920/kheir/Kheir/2.%20YASMINE.png" style="width:100%">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div class="wrapper">
        <div class="one">
            <p>
                <?php echo '<a href="index.php?page=animations&css='.$css.'&titre=animations">Animations</a>' ?>
            </p>
        </div>
        <div class="two">
            <p>
                <?php echo '<a href="index.php?page=degrades&css='.$css.'&titre=degrades">Dégradés</a>' ?>
            </p>
        </div>
        <div class="three">
            <p>
                <?php echo '<a href="index.php?page=images-de-fond&css='.$css.'&titre=images-de-fond">Images de fond</a>' ?>
            </p>
        </div>
        <div class="four">
            <p>
                <?php echo '<a href="index.php?page=transformations&css='.$css.'&titre=transformations">Transformations</a>' ?>
            </p>
        </div>
        <div class="five">
            <p>
                <?php echo '<a href="index.php?page=transitions&css='.$css.'&titre=transitions">Transitions</a>' ?>
            </p>
        </div>
        <div class="six">
            <p>
                <?php echo '<a href="index.php?page=transparence&css='.$css.'&titre=transparence">Transparence</a>' ?>
            </p>
        </div>
    </div>
</section>

