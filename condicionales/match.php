<?php

function fromLength(int $cm): string
{
    return match (true) {
        $cm < 50 => 'pequeño',
        $cm < 100 => 'mediano',
        default => 'grande',
    };
}


var_dump(fromLength(300));
