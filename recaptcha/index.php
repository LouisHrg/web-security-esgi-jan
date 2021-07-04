<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/helpers/Tooling.php";


$app = new Leaf\App;
$blade = new Leaf\Blade;
$blade->configure("views", "views/cache");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app->get("/", function() use($app, $blade) {
  echo $blade->make('index')->render();
});

$app->run();
