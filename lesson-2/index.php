<!DOCTYPE html>

<!-- Index -->
<html lang="en">
<head>
    <title>Document</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    <!-- Theme stylesheets -->
    <link rel="stylesheet" href="assets/main.css">

</head>
<body>

    <!-- Container -->
    <div class="container mt-5">
        <div class="col-8 offset-2">
            <h1>Регистрация</h1>

            <!-- Form Registration -->
            <form action="check.php" method="post">
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                </div>
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
                </div>
                
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль">
                </div>
                
                <div class="input-group">
                    <button type="submit" class="btn btn-success">Регистрация</button>
                </div>
                
            </form>
            <!-- / Form Registration -->

        </div>
    </div>
    <!-- / Container -->
    
    <!-- Core scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>