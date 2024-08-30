
<?php 
    if(isset($_POST['value'])) {
        $palavra = $_POST['value'];
        
        $palavraAoContrario = retornaPalavraAoContrario($palavra);
    }

    function retornaPalavraAoContrario($palavra) {
        $palavraArray = str_split($palavra);
        $palavraAoContrario = [];
        $j = count($palavraArray) - 1;
        $t = $j;
        for($i = 0; $i <= $j; $i++) {
            $palavraAoContrario[$i] = $palavraArray[$t];
            $t--;
        }

        return implode($palavraAoContrario);
    }
?>

<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;

        form {
            display: flex;
            flex-direction: column;
            gap: 12px;

            input, button {
                padding: 12px;
            }
        }
    }
</style>

<main>
    <form action="exe5.php" method="POST" class="form">
            <label for="value">Digite o palavra a ser consultado:</label>
            <input type="text" name="value" id="value">
            <button type="submit">Enviar</button> 

            <textarea name="" id=""><?php if(isset($palavraAoContrario) && $palavraAoContrario) { echo $palavraAoContrario; } else { echo ''; } ?></textarea>
    </form>
</main>
