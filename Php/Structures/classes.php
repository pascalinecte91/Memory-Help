<?php
//Description d'une classe
//Définition d'une classe.

class Panier {
    // Eléments de notre panier
    var $items;

    // Ajout de $num articles de type $artnr au panier

    function add_item($artnr, $num) {
        $this->items[$artnr] += $num;
    }

    // Suppression de $num articles du type $artnr du panier

    function remove_item($artnr, $num) {
        if ($this->items[$artnr] > $num) {
            $this->items[$artnr] -= $num;
            return true;
        } elseif ($this->items[$artnr] == $num) {
            unset($this->items[$artnr]);
            return true;
        } else {
            return false;
        }
    }
}


//Utilisation d'une classe.

$cart = new Panier;
$cart->add_item("10", 1);

$another_cart = new Panier;
$another_cart->add_item("0815", 3);
//Une méthode de même nom que la classe deviendra son constructeur, ici en plus on étend la classe par Extends.

class Auto_Panier extends Panier {
    function Auto_Panier () {
        $this->add_item ("10", 1);
    }
}
//On peut utiliser une méthode non instanciée grace au "::"

A::example();
//Les fonctions serialize() et unserialise() permette de sauver une classe

  $a = new A;
  $s = serialize($a);
  ...
  $c = unserialize($s);
  ?>