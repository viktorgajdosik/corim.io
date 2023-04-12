<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Task</title>
    <?php include 'includes/header.php'; ?>
    <script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#task-input',
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
    <h1>View Task</h1>
    <br>
    <div class="card">
        <div class="card-header">
            Offer Title
        </div>
        <div class="card-body">

            <h5>Task</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="task1">Task: Lorem ipsum dolor sit amet.</label>
                    <textarea id="task-input" name="task1"></textarea>
                    <div class="form-check">
            
                    </div>
                </div>
                <div class="form-group">
                    <label for="task1-deadline">Deadline:</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>