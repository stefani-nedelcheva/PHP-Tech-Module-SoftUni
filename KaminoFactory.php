<?php

$length = intval(readline());
$bestSequenceIndex = 1;
$bestDNASeq = [
    0 => 0, //longest seq 1
    1 => $length, //leftmost index
    2 => 0, //sum 1
    3 => [], //sequence itself
];
$pretendDNA = $bestDNASeq;

$dna = readline();
while ($dna !== "Clone them!") {
    $dna = explode("!", $dna);
    $bestSeq = 0;
    $bestSeqPretend = 0;
    $leftMost = $length;
    $leftMostPretend = $length;
    $sumOnes = 0;

    $index = 0;
    foreach ($dna as $value) {
        if ($value !== '') {
            if (intval($value) == 1) {
                $sumOnes++;
                $bestSeqPretend++;
                if (intval($dn[$index - 1] == 0 || $index = 0)) {
                    $leftMost = $index;
                } else {
                    $leftMostPretend = $length;
                }
            } else {
                if ($bestSeqPretend > $bestSeq) {
                    $bestSeq = $bestSeqPretend;
                }
                $bestSeqPretend = 0;
            }
            $index++;
        }
    }

    $dna = readline();
    $bestSequenceIndex++;
}