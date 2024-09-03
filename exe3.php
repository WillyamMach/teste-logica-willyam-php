<?php
    $dados_json = file_get_contents('dados.json');

    $vector = json_decode($dados_json, true);


    $iMedia = 0;
    $soma = 0;
    $faturamentoMaiorQueAMedia = 0;
    $menor = 99999;
    $maior = -1;
    $media = 0;

    foreach($vector as $key => $value) {
        if($value['valor'] != 0) {
            if($menor > $value['valor']) {
                $menor = $value['valor'];
            }

            if($maior < $value['valor']) {
                $maior = $value['valor'];
                
            }

            $iMedia++;
            $soma += $value['valor'];
            $media = $soma / $iMedia; 
        }
    }

    foreach($vector as $key => $value) {
        if($value['valor'] > $media) {
            $faturamentoMaiorQueAMedia++;
        }
    }
    
    echo "menor => ".$menor.'<br>'."maior => ".$maior."<br>"."Faturamento maior que a média => ".$faturamentoMaiorQueAMedia;
