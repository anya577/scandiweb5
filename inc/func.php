<?php
//nice-looking array, no return
function debug(array $data):void

{
    //<pre></pre>-for formatting
    echo '<pre>'.print_r($data, return: 1). '</pre>';
}

function get_products(): array{
    global $pdo;
    $res=$pdo->query(statement:"SELECT*FROM products");
    return $res->fetchAll();
}


?>