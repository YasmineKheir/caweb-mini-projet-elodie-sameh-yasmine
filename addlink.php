<?php

$lien=$_GET['lien'];
$commentaire=htmlentities($_GET[commentaire]);
$css=$_GET[css];

$fich="liens.html";
if (!file_exists($fich)) {touch($fich);}
if ($f = fopen($fich, "a"))
{
    $test=@fopen($lien, 'r');
    if ($test)
    {
        $code='<li><a href="'.$lien.'"><b>'.$commentaire.'</b> : '.$lien.'</a></li>';
        fputs($f, $code);
    } else{
        echo 'lien non valide : '.$lien;
    };
    fclose($f);
};
echo '<form name="f" action="index.php" method="get">
    <input name="css" type="hidden" value="'.$css.'">
    <input name="page" type="hidden" value="liens">
    <input name="titre" type="hidden" value="liens">
</form>';

?>

<script language="JavaScript" type="text/javascript">document.f.submit();</script>
