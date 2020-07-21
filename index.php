<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styleTp1.css" />
    <title>Devoir_oop_php_Alexandre</title>
</head>
<body>
    <div id="corps">
        <h2 id="titre">Premier travail traitant sur les bases en php</h2>
        <article>
            <aside class="answer"><!-- premierement la declaration des variable et affichage du contenu en php-->
                <?php
                    echo "<span class='question'>declaration des variables en php </span>";
                    $Nom = "ABIKWA";
                    $prenom = "Alexander";
                    $adrese = "Mutanga";
                    echo "son Nom est <span id='nom'>".$Nom."</span> et son prenom est <span id='nom'>".$prenom.
                    "</span> habitant a <b><font color='blue'>".$adrese."</font></b>";
                ?>
            </aside>
            <aside class="answer"><!--  operation arthmetique-->
                <?php
                    echo "<span class='question'>operation arthmetique </span>";
                    $val1 = 350;
                    $val2 = 50;
                    $somme = $val1 + $val2;
                    $produit = $val1 * $val2;
                    $difference = $val1 - $val2;
                    $division = $val1 / $val2;
                    echo "pour <b>".$val1."</b> et <b>".$val2."</b><br>".
                         "la somme est <span id='nom'><font color='blue'>".$somme."</font></span><br>".
                         "le produit est <span id='nom'><font color='blue'>".$produit."</font></span><br>".
                         "la difference est <span id='nom'><font color='blue'>".$difference."</font></span><br>".
                         "la division est <span id='nom'><font color='blue'>".$division."</font></span><br>";
                ?>
            </aside>
            <aside class="answer"><!--  booleens-->
                <?php
                    echo "<span class='question'>booleen</span>";
                    $val = TRUE;
                    if ($val)
                        echo " <span id='nom'><font color='blue'>il est vrai</font></span>";
                    else
                        echo "<span id='nom'><font color='blue'>il est faux</font></span>";
                ?>
            </aside>
            <aside class="answer"><!--  booleens-->
                <?php
                    echo "<span class='question'>booleen</span>";
                    $val = TRUE;
                    if ($val)
                        echo " <span id='nom'><font color='blue'>il est vrai</font></span>";
                    else
                        echo "<span id='nom'><font color='blue'>il est faux</font></span>";
                ?>
            </aside>
        </article>
    </div>
    <footer>
    </footer>
</body>
</html>