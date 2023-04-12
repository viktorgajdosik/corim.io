<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Forgot Password</title>
    <?php include 'includes/header_short.php'; ?>
</head>
<body>
    <div class="container mt-4">
        <h1>Forgot Password</h1>
        <br>
        <p>Please enter your email address and we'll send you instructions on how to reset your password.</p>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>