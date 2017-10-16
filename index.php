<?php
require __DIR__.'/vendor/autoload.php';
date_default_timezone_set ('Asia/Jakarta');

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Slim\Slim;
use SSO\SSO;

$app = new Slim();

$app->get('/', function () use ($app)
{
    SSO::authenticate();
    $user = SSO::getUser();

    $app->render('template.php', [
        'layout' => 'register',
        'user' => $user
    ]);
});

$app->post('/', function () use ($app)
{
    SSO::authenticate();
    $user = SSO::getUser();

    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/application_default_credentials.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
    
    $database = $firebase->getDatabase();
    $database->getReference('users/' . $user->npm)
        ->set([
            'username' => $user->username,
            'name' => $user->name,
            'faculty' => $user->faculty,
            'study_program' => $user->study_program,
            'educational_program' => $user->educational_program,
            'email' => $app->request->post('email'),
            'phone' => $app->request->post('phone'),
            'line' => $app->request->post('line'),
            'expectation' => $app->request->post('expectation'),
            'motivation' => $app->request->post('motivation'),
            'skillset' => $app->request->post('skillset'),
            'idea' => $app->request->post('idea'),
        ]);
    
    $app->render('template.php', [
        'layout' => 'success',
        'user' => $user
    ]);
});

$app->run();
