<?php
namespace Hadri\Stats\functions;


class StandardDeviation {
   public static function calculate(array $array){
   // calculer la moyenne
      $average = Average::calculate($array);
   // faire un nouveau tableau pour chaque ecart par rapport a la moyenne
      function deviation($v, $average){
      if ($average >= $v) {
      return $average-$v;
      }
      else {
         return $v-$average;
      }
      };
      function deviationArray($average , $array){
         $deviationArray = [];
         foreach ($array as $v) {
            $deviationArray[] = deviation($v, $average);
         }
         return $deviationArray;
      }
      $deviationArray = deviationArray($average, $array);
   //racine carré de la division de la somme des ecarts au carré par le nombre d'ecart
       $numerateur = 0  ;
       $denominateur = count($deviationArray);
      foreach ($deviationArray as  $value) {
        $numerateur += $value * $value;
      }
      
      return sqrt($numerateur/$denominateur);
   }

}