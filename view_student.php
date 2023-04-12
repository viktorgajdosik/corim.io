<!DOCTYPE html>
<html>
<head>
	<title>Research Hub - View Students</title>
	<?php include 'includes/header.php'; ?>
	
	<style>
		.notes-form {
			margin-top: 30px;
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	
	<div class="container mt-4">
		<h1>View Students</h1>

		<br>
		<h2>Student Applications</h2>
    <br>

	<table class="table">
	<tbody>
		<tr>
		<td><strong>Jane Doe</strong></td>
		</tr>
		<tr>
			<td>Pending</td>
		</tr>
		<tr>
			<td>Message</td>
		</tr>
		<tr>
		<td>
						<a href="#" class="btn btn-success">Accept</a>
						<a href="#" class="btn btn-danger">Deny</a>
					</td>
		</tr>
		</tbody>
	</table>
	<table class="table">
	<tbody>
		<tr>
			<td><strong>Jane Doe</strong></td>
		</tr>
		<tr>
			<td>Pending</td>
		</tr>
		<tr>
			<td>Message</td>
		</tr>
		<tr>
		<td>
						<a href="#" class="btn btn-success">Accept</a>
						<a href="#" class="btn btn-danger">Deny</a>
					</td>
		</tr>
		</tbody>
	</table>
		<br>	
		<h2>Current Participants</h2>
    <br>
		<table class="table">
	<tbody>
		<tr>
		<td><strong>Jane Doe</strong></td>
		</tr>
		<tr>
			<td>Pending</td>
		</tr>
		<tr>
			<td>Note</td>
		</tr>
		<tr>
		<td>
						<a href="#" class="btn btn-danger">Remove</a>
					</td>
		</tr>
		</tbody>
	</table>
	<table class="table">
	<tbody>
		<tr>
		<td><strong>Jane Doe</strong></td>
		</tr>
		<tr>
			<td>Pending</td>
		</tr>
		<tr>
			<td>Note</td>
		</tr>
		<tr>
		<td>
						<a href="#" class="btn btn-danger">Remove</a>
					</td>
		</tr>
		</tbody>
	</table>

	
		<br>
		<h2>Your Notes</h2>
		
		<form class="notes-form">
			<div class="form-group">
				<label for="john">John Doe</label>
				<textarea class="form-control" id="john" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="jane">Jane Doe</label>
				<textarea class="form-control" id="jane" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="bob">Bob Smith</label>
				<textarea class="form-control" id="bob" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="susan">Susan Johnson</label>
				<textarea class="form-control" id="susan" rows="3"></textarea>
			</div>
			
			<button type="submit" class="btn btn-primary">Save Notes</button>
		</form>

		<h2>Create Task</h2>
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
	
	<button type="submit" class="btn btn-primary">Create Task</button>
</form>
<br><br>
<h2>Assigned Tasks</h2>
<br>
<table class="table">
	<tbody>
		<tr>
		<td><strong>Research Paper</strong></td>	
		</tr>
		<tr>
		<td>John Doe</td>
		</tr>
		<tr>
			<td>Status</td>
		</tr>
		<tr>
			<td>Due April 15, 2023</td>
		</tr>
		<tr>
			<td><a href="edit_task.php" class="btn btn-secondary">Show and edit</a></td>
		</tr>
	</tbody>
	</table>
	<table class="table">
	<tbody>
	<tr>
		<td><strong>Research Paper</strong></td>	
		</tr>
		<tr>
		<td>John Doe</td>
		</tr>
		<tr>
			<td>Status</td>
		</tr>
		<tr>
			<td>Due March 31, 2023</td>
		</tr>
		<tr>
		<td>
				<a href="#" class="btn btn-success">Approve</a>
				<a href="modification_task.php" class="btn btn-primary">Request modification</a>
				<a href="edit_task.php" class="btn btn-secondary">Show and edit</a>
			</td>
		</tr>
		</tbody>
	</table>
		

	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>