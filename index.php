<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

//loader do Composer
$loader = require_once __DIR__.'/vendor/autoload.php';

//cria a aplicação
$app = new Application();

   /* o silex utiliza funções anônimas para definir rotas */

$app->get('/', function() use($app) {
	return 'Hello World!';
});

$app->get('/cervejas/{id}', function ($id) use ($app) {
    if ($id == null) {
        return 'Nenhuma cerveja informada!';
        //return new Response (json_encode($cervejas), 200);
    }
    
    return 'A cerveja é: ' .$id;
   
})->value('id', null);

$app->run();


?>