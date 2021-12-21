<?php

function getAllFirstLetter($text)
{
    $words = explode(" ", $text);
    $acronym = "";
    foreach ($words as $w) {
        $acronym .= $w[0];
    }
    return strtoupper($acronym);
}
