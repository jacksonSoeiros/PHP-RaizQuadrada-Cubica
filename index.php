<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php

    $numero_informado = $_REQUEST['num'] ?? 0;
    $cal_quadrada = sqrt($numero_informado);

    $cubica = 3;
    $cal_cubica = pow($numero_informado, (1 / $cubica));
    ?>
    <main>
        <h1>Calacular Rais Quadrada e Cubica</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Digite o Número</label>
            <input type="number" name="num" id="num" step="0.01" value="<?= $numero_informado ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultados do Calculo</h2>

        <?php
        echo "<p>Analizando o Números <strong>$numero_informado</strong>, Temos:</p>";
        echo "<ul>";
        echo "<li>";
        echo "<p>A Raiz Quadrada de $numero_informado é = <b>" . number_format($cal_quadrada, 3, ",", ".") . "</b></p>";
        echo "</li>";
        echo "<li>";
        echo "<p>A Raiz Cubica de $numero_informado é = <b>" . number_format($cal_cubica, 3, ",", ".") . "</b></p>";
        echo "</li>";
        echo "</ul>";
        ?>
    </section>
</body>

</html>