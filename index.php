<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Berhasil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-warning">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="card-header">
                        <h1 class="text-center text-primary" style="font-weight: bold;">Login Page</h1>
                    </div>
                    <div class="card-body">
                        <form action="login.php" class="form" method="POST">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" name="Username" class="form-control"><br>
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" name="Password" class="form-control"><br>
                            <br>
                            <div class="d-grid gap-2">
                                <input type="submit" value="Login" name="Login" class="btn btn-primary btn-lg" style="font-weight: bold;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>