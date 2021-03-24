<html lang="en">
<head>
    <title>Ex_02</title>
    <link rel="stylesheet" href="../../Library/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label><br>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label><br>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="remember-me" for="exampleCheck1">remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</body>
</html>