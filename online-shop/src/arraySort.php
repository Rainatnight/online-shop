<?php

function arraySort($array, $key, $sort): array
{
    usort($array, function ($a, $b) use ($key, $sort) {
        if ($sort == SORT_DESC) {
            return $b[$key] <=> $a[$key];
        } else {
            return $a[$key] <=> $b[$key];
        }
    });
    return $array;
}



