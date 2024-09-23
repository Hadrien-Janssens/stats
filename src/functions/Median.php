<?php
namespace Hadri\Stats\functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        // S'assurer que le tableau n'est pas vide
        if (empty($numbers)) {
            throw new \InvalidArgumentException("Le tableau ne doit pas être vide");
        }

        // Trier le tableau
        sort($numbers);

        // Compter le nombre d'éléments
        $count = count($numbers);

        // Calcul de la médiane
        $middleIndex = (int) floor($count / 2);

        if ($count % 2 === 0) {
            // Si pair, on prend la moyenne des deux valeurs centrales
            return ($numbers[$middleIndex - 1] + $numbers[$middleIndex]) / 2;
        } else {
            // Si impair, la médiane est l'élément central
            return $numbers[$middleIndex];
        }
    }
}