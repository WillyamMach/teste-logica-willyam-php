<?php
    $vector = [
        'SP' => 67836.43,
        'RJ' => 36678.66,
        'MG' => 29229.88,
        'ES' => 27165.48,
        'OUTROS' => 19849.53
    ];

    $soma = 0;
    foreach($vector as $key => $value) {
        $soma += $value;
    }

    foreach($vector as $key => $value) {
        $porcentagem = ($value / $soma) * 100;

        echo $key." = ".number_format($porcentagem, 2)."%".PHP_EOL;
        echo '<br>';
    }
