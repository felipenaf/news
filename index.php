<?php

require 'vendor/autoload.php';

echo 'hello world';

/* conexão */
// $con = Connection::getConnection();
// $sql = 'select * from noticia';
// $stmt = $con->prepare($sql);
// $stmt->execute();
// var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

/* models */
$noticia = new Noticia();
var_dump([
    $noticia->all(),
    $noticia->find(1),
]);
