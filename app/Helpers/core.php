<?php

if (!function_exists('numberToLetter')){
    /**
     * Convertit un index numérique en une lettre de l'alphabet (1 = A, modulo si supérieur à 26).
     *
     * @param int $index Le numéro (index, 1 = A, 27 = A, etc.).
     * @param bool $isUpperCase True pour une lettre majuscule, False pour une minuscule.
     * @return string La lettre correspondante.
     */
    function numberToLetter(int $index, bool $isUpperCase = true): string
    {
        // Ajuster l'index pour rester dans l'intervalle [1-26]
        $index = ($index - 1) % 26 + 1;

        // Point de départ ASCII (64 pour majuscules, 96 pour minuscules)
        $baseAscii = $isUpperCase ? 64 : 96;

        // Retourne la lettre correspondante
        return chr($baseAscii + $index);
    }
}
