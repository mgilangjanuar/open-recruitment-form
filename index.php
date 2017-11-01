<?php
require __DIR__.'/vendor/autoload.php';
date_default_timezone_set ('Asia/Jakarta');
session_start();

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Slim\Slim;

$app = new Slim();

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/application_default_credentials.json');
$database = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create()
    ->getDatabase();

$app->get('/', function () use ($app)
{
    $app->render('template.php', [
        'layout' => 'register',
    ]);
});

$app->post('/', function () use ($app, $database)
{
    $database->getReference('csuidev/users')
        ->push([
            'name' => $app->request->post('name'),
            'email' => $app->request->post('email'),
            'phone' => $app->request->post('phone'),
            'topic' => $app->request->post('topic'),
            'synopsis' => $app->request->post('synopsis'),
            'audience' => $app->request->post('audience'),
            'created_at' => date('d M Y H:i'),
        ]);
    
    $app->render('template.php', [
        'layout' => 'success',
        'name' => $app->request->post('name')
    ]);
});

$app->group('/results', function () use ($app, $database)
{
    if (!isset($_SESSION['password_hash'])) {
        $_SESSION['password_hash'] = $database->getReference('csuidev/site/password')->getValue();
    }
    $isValidate = isset($_SESSION['password']) && password_verify($_SESSION['password'], $_SESSION['password_hash']);

    $app->post('/', function () use ($app)
    {
        $_SESSION['password'] = $app->request->post('password');
        $app->redirect('results');
    });

    $app->get('/', function () use ($app, $database, $isValidate)
    {
        if ($isValidate) {
            $app->render('results/template.php', [
                'layout' => 'data',
                'data' => $database->getReference('csuidev/users')->getValue(),
            ]);
        } else {
            $app->render('results/template.php', [
                'layout' => 'password'
            ]);
        }
    });

    if ($isValidate) {
        
        $app->get('/view/:id', function ($id) use ($app, $database)
        {
            $app->render('results/template.php', [
                'layout' => 'view',
                'id' => $id,
                'user' => $database->getReference('csuidev/users/' . $id)->getValue()
            ]);
        });

        $app->get('/update/:id', function ($id) use ($app, $database)
        {
            $app->render('results/template.php', [
                'layout' => 'update',
                'id' => $id,
                'user' => $database->getReference('csuidev/users/' . $id)->getValue()
            ]);
        });

        $app->post('/update/:id', function ($id) use ($app, $database)
        {
            $database->getReference('csuidev/users/' . $id)
                ->set([
                    'name' => $app->request->post('name'),
                    'email' => $app->request->post('email'),
                    'phone' => $app->request->post('phone'),
                    'topic' => $app->request->post('topic'),
                    'synopsis' => $app->request->post('synopsis'),
                    'audience' => $app->request->post('audience'),
                    'created_at' => date('d M Y H:i'),
                ]);
            $app->redirect('../../results/view/' . $id);
        });

        $app->get('/delete/:id', function ($id) use ($app, $database)
        {
            $database->getReference('csuidev/users/' . $id)->set([]);
            $app->redirect('../../results');
        });

        $app->get('/logout', function () use ($app)
        {
            session_destroy();
            $app->redirect('../../results');
        });
    }
});

$app->run();
