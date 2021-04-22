<?php
/**
 * Undocumented class
 * 
 * contient plusieur fonction general 
 */
class Utils
{
    /**
     * Undocumented function
     * multiplie les valeurs qu'on lui met en parametres
     * @param integer $val
     * @param integer $val2
     * @return integer $resultat 
     */
    public  static function multiple(int $val, int $val2)
    {
        $resultat = $val * $val2;
        return $resultat;
    }
    public  static function addition(int $val, int $val2, int $val3 = 0, int $val4 = 0, int $val5 = 0)
    {
        $resultat = $val + $val2 + $val3 + $val4 + $val5;
        return $resultat;
    }

    public static function sum (...$elements)
    {
        return array_sum($elements);
    }
}