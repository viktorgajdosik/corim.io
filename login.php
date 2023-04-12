<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Login</title>
    <?php include 'includes/header_short.php'; ?>
    
 
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #FFFFFF;">
                        <h3>Login to Research Hub</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="forgot-password">
                                <a href="forgot_password.php">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <div class="social-buttons">
                                <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i> Login with Facebook</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-google"></i> Login with Google</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>