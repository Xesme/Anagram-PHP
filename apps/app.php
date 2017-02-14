<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/anagram.php";

    $app = new Silex\Application();

    $app->regist(new Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views')) ;

    $app->get("/", function() use($app){
        return $app['twig']->render('entry_form.html.twig');
    })

    return $app;
?>
