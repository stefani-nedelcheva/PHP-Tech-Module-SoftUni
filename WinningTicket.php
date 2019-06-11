<?php

$tickets = explode(", ", readline());
$pattern = '/([$]{6,10}|[@]{6,10}|[#]{6,10}|[\^]{6,10})/';
$matchL = [];
$matchR = [];

foreach ($tickets as $ticket) {
    $ticket = trim($ticket);
    if (strlen($ticket) == 20) {
        $left = substr($ticket, 0, 10);
        $right = substr($ticket, 10);
        if (preg_match($pattern, $left, $matchL) && preg_match($pattern, $right, $matchR)) {
            $char = $matchL[1][0];
            if ($ticket === str_repeat($char, 20)) {
                echo "ticket \"$ticket\" - 10$char Jackpot!\n";
            } else {
                $lengthL = strlen($matchL[1]);
                $lengthR = strlen($matchR[1]);
                if ($lengthL < $lengthR) {
                    $char = $matchL[1][0];
                    echo "ticket \"$ticket\" - $lengthL$char\n";
                } else {
                    $char = $matchR[1][0];
                    echo "ticket \"$ticket\" - $lengthR$char\n";
                }
            }
        } else {
            echo "ticket \"$ticket\" - no match\n";
        }
    } else {
        echo "invalid ticket\n";
    }
}