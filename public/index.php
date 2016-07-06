<?php
/**
 * Created by PhpStorm.
 * User: tadeu
 * Date: 06/07/2016
 * Time: 09:31
 */
require __DIR__.'/../bootstrap.php';
/* usando o response
use Symfony\Component\HttpFoundation\Response;
$response = new Response();

$app->get('/',function() use($response){
    //return "ola mundo";
    $response->setContent('Olá mundo');
    //return $response;
    echo 'teste';
});
*/
/*usando apenas o return
$app->get('/',function(){
    return 'oi';
});
//rota passando parametro
$app->get('/ola/{nome}',function($nome){
    return "ola $nome";
});
*/

$aClientes[] = array('nome' => 'tadeu', 'e-mail' => 'tadeu.parreiras@gmail.com', 'cnpj' => '12.265.256/0001-00');
$aClientes[] = array('nome' => 'luciana', 'e-mail' => 'luciana@gmail.com', 'cnpj' => '24.568.789/0001-80');
$aClientes[] = array('nome' => 'rosania', 'e-mail' => 'rosaniafinanceiro@yahoo.com.br', 'cnpj' => '52.657.895/0001-90');
$app->get('/cliente',function()use($aClientes){

    return json_encode($aClientes);
});

$app->run();