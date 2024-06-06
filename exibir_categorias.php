<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exibir Categorias</title>
</head>
<body>
    <?php
        $pdo = new PDO("squlite:estoque.db");
        $queryCategorias ="SELECT * FROM categorias";

        $vetorCategorias = $pdo->query($queryCategorias);

        foreach($cayegorias as $categoria){
            echo $categoria["nome"]."<br>";
        }
    ?>
</body>
</html>