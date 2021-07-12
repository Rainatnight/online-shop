<?php

function cutString($line, $length, $appends): string
{
	$dlina = mb_strlen($line);
	if ($dlina > $length) {
		return mb_strimwidth($line, 0, $length) . str_repeat($appends, 1);
	} else {
		return $line;
	}
}
 
