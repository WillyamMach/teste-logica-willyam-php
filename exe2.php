<!--  criando formulario para receber o numero do usuario -->
  <style> 
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin: 1em;

            input, button {
                padding: 10px
            }
        }
    }
  </style>
<main>
    <form action="exe2.php" method="POST" class="form">
            <label for="value">Digite o valor a ser consultado:</label>
            <input type="number" name="value">
            <button type="submit">Enviar</button> 
    </form>
</main>

<?php 
   if(isset($_POST['value'])) {
        // pegando valor vindo do formulario e criando variaveis
        $formInputValue = $_POST['value'];        
        $firstValue = 0;
        $secondValue = 1;
        $message = '';

        calcFibonnaci($formInputValue, $firstValue, $secondValue); 
    }

function calcFibonnaci($formInputValue, $fst, $scd) {
    $fibonnaciValue = 0;

    while($formInputValue >= $fibonnaciValue) {
        $fibonnaciValue = $fst + $scd;
        $fst = $scd;
        $scd = $fibonnaciValue;
 
        $isInputOnTheList = returnIfValueIsOnTheList($formInputValue, $fibonnaciValue);

        if($isInputOnTheList) {
            echo "Numero informado está presente na lista";
            exit;
        }
    }

    echo "O numero não estava presente na lista";
}

function returnIfValueIsOnTheList($value, $fibonnaciValue) {
    if($value == $fibonnaciValue) {
        return true;
    };

    return false;
}

?>