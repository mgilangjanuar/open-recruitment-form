<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/src/css/fonts.css">
    <link rel="stylesheet" href="public/src/css/styles.css">
    <title><?= isset($title) ? $title : ucfirst($layout) ?> | CSUI Developer Community</title>
</head>
<body>

    <div class="img-logo"></div>
    
    <div class="container-fluid">
        <?php require_once __DIR__ . '/' . $layout . '.php' ?>
    </div>

    <script src="public/libs/jquery/dist/jquery.min.js"></script>
    <script>
        $('#cancel').click(function(e) {
            if (!confirm('Are you sure want to cancel?')) {
                e.preventDefault();
            }
        })
    </script>
</body>
</html>