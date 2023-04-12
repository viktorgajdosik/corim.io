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
    <h1>View Offer</h1>
    <div class="card">
        <div class="card-body">
        <h2>Ofer Title</h2><br>
            <h5 class="card-title">Offer Description</h5>
            <p class="card-text">Offer details go here</p>
            <p class="card-text"><strong>Deadline:</strong> Offer Deadline</p>

            <hr>

            <h5>Participants</h5>
            <ul>
                <li>Participant 1</li>
                <li>Participant 2</li>
                <li>Participant 3</li>
            </ul>

            <hr>
            <h2>Assigned Tasks</h2>

            <table class="table">
	<tbody>
		<tr>
        <td><strong>Research paper</strong></td>
		</tr>
		<tr>
			<td>Status</td>
		</tr>
		<tr>
			<td>Due April 15, 2023</td>
		</tr>
		<tr>
			<td><a href="edit_task.php" class="btn btn-secondary">Edit</a></td>
		</tr>
	</tbody>
	</table>

	<table class="table">
	<tbody>
		<tr>
			<td><strong>Lab Report</strong></td>
		</tr>
		<tr>
			<td>Status</td>
		</tr>
		<tr>
			<td>Due March 31, 2023</td>
		</tr>
		<tr>
		<td>
				<a href="" class="btn btn-primary">Start working</a>
			</td>
		</tr>
		</tbody>
	</table>

        
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>