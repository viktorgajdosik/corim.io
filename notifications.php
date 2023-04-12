<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Notifications</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
    
    <div class="container mt-4">
        <h1>Notifications</h1>
        <br>
        <?php if (isset($success)) : ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <ul class="list-group">
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">New research offer created</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div>
                        <small>2 days ago</small>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">Your application has been accepted</h5>
                        <p class="mb-1">Congratulations! You have been selected for the research project.</p>
                    </div>
                    <div>
                        <small>3 days ago</small>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">Research offer deadline approaching</h5>
                        <p class="mb-1">The deadline for the research project is coming up soon.</p>
                    </div>
                    <div>
                        <small>1 week ago</small>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>