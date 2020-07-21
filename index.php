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
        <h2>Premier travail traitant sur les bases en php</h2>
        <article>
            <aside><!-- premierement la declaration des variable et affichage du contenu en php-->
                <?php
                    echo "<span class='question'>declaration des variables en php</span>";
                    $Nom = "ABIKWA";
                    $prenom = "Alexander";
                    $adrese = "Mutanga";
                    echo "son Nom est <span id='nom'>".$Nom."</span> et son prenom est <span id='nom'>".$prenom.
                    " habitant a <span id='nom'>".$adrese;
                ?>
            </aside>
        </article>
    </div>
    <footer>
    </footer>
</body>
</html>