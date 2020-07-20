<?php
$page=$_GET[page];
$css=$_GET[css];
$titre=$_GET[titre];
if (($page=='')||(substr($page,0,7)=='http://'))
{
    $page = "home";
    $titre = "Accueil";
    $css = "css0";
}
?>
  
<html lang="fr">
    <head>
        <title><? echo "Mini Projet : ".$titre ?></title>
        <meta charset="utf-8" />
        <? echo '<link href="'.$css.'.css"'. 'rel="stylesheet" type="text/css">'; ?>
<!--        <link rel="stylesheet" type="text/css" href="main.css">-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <?php
        /*inclusion des fichiers*/
        include "haut.php";
            echo "\n";

        include "navig.php";
            echo "\n";

        include $page.".php"; //page à inclure en fonction de la valeur de $page
            echo "\n";

        include "bas.php";
        ?>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }
        </script>
    </body>
</html>