<?php
require __DIR__.'/vendor/autoload.php';
date_default_timezone_set ('Asia/Jakarta');
session_start();

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Slim\Slim;
use SSO\SSO;

$app = new Slim();

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/application_default_credentials.json');
$database = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create()
    ->getDatabase();

$app->get('/', function () use ($app)
{
    SSO::authenticate();
    $user = SSO::getUser();

    $app->render('template.php', [
        'layout' => 'register',
        'user' => $user
    ]);
});

$app->post('/', function () use ($app, $database)
{
    SSO::authenticate();
    $user = SSO::getUser();

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
            'created_at' => date('d M Y H:i'),
        ]);
    
    $app->render('template.php', [
        'layout' => 'success',
        'user' => $user
    ]);
});

$app->get('/logout', function ()
{
    SSO::logout('https://www.micuniversitasindonesia.org/registration');
});

$app->group('/results', function () use ($app, $database)
{
    if (!isset($_SESSION['password_hash'])) {
        $_SESSION['password_hash'] = $database->getReference('site/password')->getValue();
    }
    $isValidate = isset($_SESSION['password']) && password_verify($_SESSION['password'], $_SESSION['password_hash']);

    $app->post('/', function () use ($app)
    {
        $_SESSION['password'] = $app->request->post('password');
        $app->redirect('/results');
    });

    $app->get('/', function () use ($app, $database, $isValidate)
    {
        if ($isValidate) {
            $app->render('results/template.php', [
                'layout' => 'data',
                'data' => $database->getReference('users')->getValue(),
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
                'user' => $database->getReference('users/' . $id)->getValue()
            ]);
        });

        $app->get('/update/:id', function ($id) use ($app, $database)
        {
            $app->render('results/template.php', [
                'layout' => 'update',
                'id' => $id,
                'user' => $database->getReference('users/' . $id)->getValue()
            ]);
        });

        $app->post('/update/:id', function ($id) use ($app, $database)
        {
            $database->getReference('users/' . $id)
                ->set([
                    'username' => $app->request->post('username'),
                    'name' => $app->request->post('name'),
                    'faculty' => $app->request->post('faculty'),
                    'study_program' => $app->request->post('study_program'),
                    'educational_program' => $app->request->post('educational_program'),
                    'email' => $app->request->post('email'),
                    'phone' => $app->request->post('phone'),
                    'line' => $app->request->post('line'),
                    'expectation' => $app->request->post('expectation'),
                    'motivation' => $app->request->post('motivation'),
                    'skillset' => $app->request->post('skillset'),
                    'idea' => $app->request->post('idea'),
                    'created_at' => date('d M Y H:i'),
                ]);
            $app->redirect('/results/view/' . $id);
        });

        $app->get('/delete/:id', function ($id) use ($app, $database)
        {
            $database->getReference('users/' . $id)->set([]);
            $app->redirect('/results');
        });

        $app->get('/logout', function () use ($app)
        {
            session_destroy();
            $app->redirect('/results');
        });
    }
});

$app->run();
