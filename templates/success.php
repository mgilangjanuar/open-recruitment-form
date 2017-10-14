<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/src/css/fonts.css">
    <link rel="stylesheet" href="public/src/css/styles.css">
    <title>Success | Microsoft Innovation Center Universitas Indonesia</title>
</head>
<body>

    <div class="img-logo">
        <img src="public/src/images/logo-reverse.png" alt="">
    </div>
    
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Registration success!</h1>
                <p>
                    Welcome, <?= $user->name ?>.
                </p>
            </div>
        </div>
    </div>

    <script src="public/libs/jquery/dist/jquery.min.js"></script>
</body>
</html>