<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - View Offer</title>
    <?php include 'includes/header.php'; ?>
    <script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#progress-input',
            plugins: 'link image table',
            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | link image table',
            menubar: false,
            statusbar: false,
            height: 400
        });
    </script>
</head>
<body>
   
    <div class="container mt-4">
        <h1>View Offer</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Offer Description</h5>
                <p class="card-text">Offer details go here</p>
                <p class="card-text"><strong>Deadline:</strong> Offer Deadline</p>

                <a href="view_student.php" class="btn btn-primary" role="button">Participants</a>
             <a href="edit_offer.php" class="btn btn-secondary" role="button">Edit</a>
            <a href="rating.php" class="btn btn-danger" role="button">Close this offer</a>

                <hr>

                <h5>Progress Documentation</h5>
                <textarea id="progress-input" name="progress-input"></textarea>
                <a href="" class="btn btn-primary mt-3" role="button">Save Progress</a>
                <a href="progress-doc.docx" download class="btn btn-primary mt-3" role="button">Download Progress</a>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>