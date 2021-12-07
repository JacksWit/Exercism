<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

function score(string $word): int {
    $score=0;
    $array_word=str_split($word);
    foreach ($array_word as $char) {
        $char = strtoupper($char);
        if ($char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U' || $char == 'L' || $char == 'N' || $char == 'R' || $char == 'S' || $char == 'T') {
                $score+=1;
            }
        else if ($char == 'D' || $char == 'G') {
                $score+=2;
            }
        else if($char == 'B' || $char == 'C' || $char == 'M' || $char == 'P') {
                $score+=3;
            }
        else if($char == 'F' || $char == 'H' || $char == 'V' || $char == 'W' || $char == 'Y') {
                $score+=4;
            }
        else if($char == 'K') {
                $score+=5;
            }
        else if($char == 'J' || $char == 'X') {
                $score+=8;
            }
        else if($char == 'Q' || $char == 'Z') {
                $score+=10;
            }
        }
    return $score;
    }
?>