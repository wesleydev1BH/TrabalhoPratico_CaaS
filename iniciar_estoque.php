<?php
    echo $_GET["quantidade"];
    echo $_GET["exibir_produto"];

    $queryInniciaEtoque = "INSERT INTO estoque (quantidade, produto_id )
    VALUE(".$_GET["exibir_produto"].", ".$_GET["quantidade"].")";

    $pdo = new PDO("sqlite:estoque.db");
    $pdo->query($queryInsereestoque);
?>