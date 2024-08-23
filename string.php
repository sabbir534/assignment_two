<?php

$strings = ["Hello", "World", "PHP", "Programming"];

for ($i = 0; $i < count($strings); $i++) {
    $countVowels = countVowels($strings[$i]);
    $revWord = strrev($strings[$i]);
    echo "Original String: {$strings[$i]}, Vowel Count: {$countVowels}, Reversed String: {$revWord}" . PHP_EOL;
}

function countVowels($word)
{
    $word = strtolower($word);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
