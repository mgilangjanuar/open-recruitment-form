<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/src/css/fonts.css">
    <link rel="stylesheet" href="public/src/css/styles.css">
    <title>Registration | Microsoft Innovation Center Universitas Indonesia</title>
</head>
<body>

    <div class="img-logo">
        <img src="public/src/images/logo-reverse.png" alt="">
    </div>
    
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Hi, <?= $user->name ?>!</h1>

                <p>Please complete this form.</p>
                <br />

                <form method="post" class="form-forizontal">
                    
                    <div class="form-group">
                        <label>Email address<span class="text-danger">*</span></label>
                        <input class="form-control" name="email" type="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Phone number<span class="text-danger">*</span></label>
                        <input class="form-control" name="phone" type="text" required>
                    </div>

                    <div class="form-group">
                        <label>ID Line</label>
                        <input class="form-control" name="line" type="text">
                    </div>

                    <div class="form-group">
                        <label>Expectation<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="expectation" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Motivation<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="motivation" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Skillset</label>
                        <textarea class="form-control" name="skillset"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Your idea</label>
                        <textarea class="form-control" name="idea"></textarea>
                    </div>

                    <p class="text-right">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="public/libs/jquery/dist/jquery.min.js"></script>
</body>
</html>