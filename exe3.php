<?php
    $vector = [
        200, 300, 1000, 600, 100, 0, 0,
        200, 300, 1000, 600, 100, 0, 0,
        200, 300, 1000, 600, 100, 0, 0,
        200, 300, 1000, 600, 100, 0, 0
    ];

    $iMedia = 0;
    $soma = 0;
    $faturamentoMaiorQueAMedia = 0;
    $menor = 99999;
    $maior = -1;
    $media = 0;

    for($i = 0; $i < count($vector); $i++) {
        if($vector[$i] != 0) {
            if($menor > $vector[$i]) {
                $menor = $vector[$i];
            }

            if($maior < $vector[$i]) {
                $maior = $vector[$i];
                
            }

            $iMedia++;
            $soma += $vector[$i];
            $media = $soma / $iMedia; 
        }
    }

    for($j = 0; $j < count($vector); $j++) {
        if($vector[$j] > $media) {
            $faturamentoMaiorQueAMedia++;
        }
    }

    echo $menor.PHP_EOL;
    echo $maior.PHP_EOL;
    echo $faturamentoMaiorQueAMedia.PHP_EOL;
