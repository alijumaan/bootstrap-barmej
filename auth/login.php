<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="../assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="../index.php">الدوري السعودي</a>
            <a class="navbar-brand text-white" href="login.php">دخول</a>
        </div>
    </nav>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="p-2 text-center text-success">
                    <h2>اهلا بك في الدوري السعودي لكرة القدم</h2>
                </div>
                <div class="card p-5 text-right">
                    <form action="../index.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputUsername">اسم المستخدم</label>
                            <input type="text" class="form-control text-right" id="exampleInputUsername" aria-describedby="usernameHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">كلمة المرور</label>
                            <input type="password" class="form-control text-right" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">تذكرني</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">دخول</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>