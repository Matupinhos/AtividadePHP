<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do triangulo</title>
    <link rel="stylesheet" href="../atividade1/style.css">
    
</head>
<body>
    <div id="div_principal">
        <img src="https://s5.static.brasilescola.uol.com.br/be/2022/07/area-do-triangulo.jpg" alt="">
        <form method="POST" action="">
            <label for="altura_triangulo">Escolha a altura no triangulo: </label>
            <input type="number" id="altura_triangulo" name="altura_triangulo">
            <br>
            <label for="base_triangulo">Escolha a base do triangulo: </label>
            <input type="number" id="base_triangulo" name="base_triangulo">
            <br>
            <button type='submit' id="verificar" name="verificar">Verificar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['verificar'])){
                    $altura = $_POST['altura_triangulo'];
                    $base = $_POST['base_triangulo'];
                    $areaTriangulo = ($altura * $base) / 2;
                    echo '<p>A área do triangulo é: ', $areaTriangulo;
                    if($areaTriangulo >= 100){
                        echo '<p>A área do triangulo é MAIOR do que o valor limite 100';
                    }else {
                        echo '<p>A área do triangulo é MENOR do que o valor limite 100';
                    }
                };
            };
        ?>
    </div>
</body>
</html>