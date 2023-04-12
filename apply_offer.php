<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - View Offer</title>
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
  <h1>Apply for the research work</h1>
  <div class="card">
    <form>
      <div class="card-body">
        <h2>Offer title</h2><br>
        <h5 class="card-title">Offer Description</h5>
        <p class="card-text">Offer details go here</p>
        <p class="card-text"><strong>Deadline:</strong> Offer Deadline</p>

        <hr><br>

        <h5>Available tasks</h5>
        <ul>
          <li>Task 1</li>
          <li>Task 2</li>
          <li>Task 3</li>
        </ul>
        <hr><br>
        <div class="form-group">
          <h5 for="message">Message to Teacher</h5>
          <textarea class="form-control" id="message" name="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Apply</button>
      </div>
    </form>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>