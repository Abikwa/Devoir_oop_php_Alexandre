<?php
    use Devoir_oop_php_Alexandre\Personne\Personne\Personne;
    include_once("Personne\Personne.php");
    
    function calculatrice($val1, $val2, $type)
    {
        $resultat;
        if(intval($val1) > 0)
        {
            $val1 = intval($val1);
            $val2 = intval($val2);
            if($type == "+")
                $resultat = $val1 + $val2;
            elseif($type == "*")
                $resultat = $val1 + $val2;
            elseif($type == "/")
                $resultat = $val1 / $val2;
            elseif($type == "-")
                $resultat = $val1 - $val2;
            else
                $resultat = "ce type d'operation n'est pas disponible";
        }
        else
            $resultat = "la premiere valeur doit etre au moins superieur a zero";
        return $resultat;
    }
?>
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
            <aside class="answer"><!--  tableau-->
                <?php
                    echo "<span class='question'>tableau</span>";
                    $table = array(10,21,32,43,55);
                    echo "c'est untableau de  <b>5</b> valeurs dont <br>". 
                    "le premier est  <span id='nom'><font color='trail'>".$table[0]."</font></span><br>".
                    "le deuxieme est  <span id='nom'><font color='trail'>".$table[1]."</font></span><br>".
                    "le troisieme est  <span id='nom'><font color='trail'>".$table[2]."</font></span><br>".
                    "le quatrieme est  <span id='nom'><font color='trail'>".$table[3]."</font></span><br>".
                    "le cinquieme est  <span id='nom'><font color='trail'>".$table[4]."</font></span><br>";
                ?>
            </aside>
            <aside class="answer"><!--  structure conditionnelle-->
                <?php
                    echo "<span class='question'>structure conditionnelle</span>";
                    $table = array(27,21,32,13,55, 88);
                    for($i = 0; $i<5; $i++)
                    {
                        $j = $i+1;
                        $k = $i + 2;
                        if($table[$i] < $table[$j])
                            echo "la Valeur numero ".$j ." <span id='nom'><font color='trail'>".$table[$i]."</font></span> est <span id='nom'><font color='blue'>inferieur</font></span> a la valeur numero ".$k." <span id='nom'><font color='trail'>".$table[$j]."</font></span><br>";
                        else if($table[$i] > $table[$j])
                            echo "la Valeur numero ".$j ." <span id='nom'><font color='trail'>".$table[$i]."</font></span> est <span id='nom'><font color='blue'>superieur</font></span> a la valeur numero ".$k." <span id='nom'><font color='trail'>".$table[$j]."</font></span><br>";
                        else
                            echo "la Valeur numero ".$j ." <span id='nom'><font color='trail'>".$table[$i]."</font></span> est <span id='nom'><font color='blue'>egale</font></span> a la valeur numero ".$k." <span id='nom'><font color='trail'>".$table[$j]."</font></span><br>";
                    }
                ?>
            </aside>
            <aside class="answer"><!--  fonction-->
                <?php
                    echo "<span class='question'>fonction</span>";
                    if(isset($_POST['calculer']))
                    {
                        if(isset($_POST['val1']) and !empty($_POST['val1']))
                        {
                            if(isset($_POST['val2']) and !empty($_POST['val2']))
                            {
                                if(isset($_POST['add']))
                                {
                                    $nbr1 = htmlspecialchars($_POST['val1']);
                                    $nbr2 = htmlspecialchars($_POST['val2']);
                                    $calc = $_POST['add'];
                                   $resultat =  calculatrice($nbr1, $nbr2, $calc);
                                }
                                else
                                    $resultat = "choisir le type de calcul";
                            }else
                                $resultat = "saisir la deuxieme valeur aussi";
                        }else
                            $resultat = "saisir la prmiere valeur aussi";
                    }
                    if(isset($nbr1))
                        echo " <span id='nom'><font color='trail'>".$nbr1."</font></span> ".$calc."  <span id='nom'><font color='trail'>".$nbr2."</font></span> = <span id='nom'><font color='blue'>".$resultat."</font></span><br>";
                   else if(isset($resultat))
                        echo "<span id='nom'><font color='red'>".$resultat."</font></span>";
                    else
                        echo "<b>saisir deux valeur pour effectuer un simple calcule</b>";
                ?>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td><input type="number" name="val1" placeholder="valeur 1"/></td>
                        </tr>
                        <tr>
                            <td><input type="number" name="val2" placeholder = "valeur 2" /></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="add"  value="+" id="addition" /> <label for="addition">Addition</label>
                                <input type="radio" name="add"  value="-" id="sustr" /> <label for="sustr">Soustraction</label>
                                <input type="radio" name="add"  value="*" id="mult" /> <label for="mult">Multiplication</label>
                                <input type="radio" name="add"  value="/" id="sou" /> <label for="sou">Division</label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="calculer" value = "Calculer"  id="submit"/></td>
                        </tr>
                    </table>
                </form>
            </aside>
            <aside class="answer"><!--  pillier dE LA POO-->
                <?php
                     echo "<span class='question'>pillier dE LA POO-</span>";
                    $personne = new Personne("Abiwa", "Alexander", "Masculin", "28");
                    $personne->AffichagePersonne();
                    $personne = new Personne("ASPEN", "malo", "Masculin", "12");
                    $personne->AffichagePersonne();
                    $personne = new Personne("alice", "Gloria", "Feminin", "55");
                    $personne->AffichagePersonne();
                    $personne = new Personne("PAscal", "Nkurumziza", "Masculin", "99");
                    $personne->AffichagePersonne();
                ?>
            </aside>
        </article>
    </div>
    <footer>
        <p align="right"><a href="mailto:abikalex8@gmail.com">Fait par ABIKWANINE BATUMIKE Alexandre</a></p>
    </footer>
</body>
</html>