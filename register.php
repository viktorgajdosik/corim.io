<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Register</title>
    <?php include 'includes/header_short.php'; ?>
</head>
<body>
<div class="container mt-4">
    <h1>Register</h1>
    <br>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name and surname</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="university">University</label>
            <input type="text" class="form-control" id="university" name="university" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="form-group">
            <label for="user-type">Register as:</label>
            <select class="form-control" id="user-type" name="user-type" required>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div class="mt-3">
        Already have an account? <a href="login.php">Login here</a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>