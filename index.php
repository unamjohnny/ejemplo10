<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
$arreglo = ["Juan Carlos Carranza Moreno" => "415074876"];
    return $app->json($arreglo);
});

$app->run();
