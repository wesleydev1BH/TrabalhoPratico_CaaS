<?php
    echo $_GET["nome"];
    $pdo =new PDO("sqlite:estoque.db");
    $queryiserecategoria = "INSERT INTO categorias (nome)
    VALUE(\"".$_GET[]."\")";
    $pdo->query($queryInsereCategoria);
?>