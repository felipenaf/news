<?php

require 'vendor/autoload.php';

/* conexão */
// $con = Connection::getConnection();
// $sql = 'select * from noticia';
// $stmt = $con->prepare($sql);
// $stmt->execute();
// var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

/* models */
$noticia = new Noticia('teste', 'fikgbewfijgfe figfwe fgewuyi');
$noticia = $noticia->find(2);

var_dump([
    $noticia->titulo,
    $noticia->conteudo,
    $noticia->categoria->nome,
]);

// var_dump($noticia->all());
