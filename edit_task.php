<!DOCTYPE html>
<html>
<head>
	<title>Research Hub - Edit Task</title>
	<?php include 'includes/header.php'; ?>
	
</head>
<body>
	
	<div class="container mt-4">
		<h1>Edit Task</h1>
    <br>
<form>
	<div class="form-group">
		<label for="task-name">Task Name</label>
		<input type="text" class="form-control" id="task-name">
	</div>
	<div class="form-group">
		<label for="task-details">Task Details</label>
		<textarea class="form-control" id="task-details" rows="5"></textarea>
	</div>
	<div class="form-group">
    <label for="students">Select Students</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="john" id="john">
      <label class="form-check-label" for="john">
        John Doe
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="jane" id="jane">
      <label class="form-check-label" for="jane">
        Jane Doe
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="bob" id="bob">
      <label class="form-check-label" for="bob">
        Bob Smith
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="susan" id="susan">
      <label class="form-check-label" for="susan">
        Susan Johnson
      </label>
    </div>
  </div>
	<div class="form-group">
		<label for="task-deadline">Deadline</label>
		<input type="date" class="form-control" id="task-deadline">
	</div>
	
	<button type="submit" class="btn btn-primary">Edit Task</button>
</form>
<br><br>


	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>