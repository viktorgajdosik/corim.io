<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Rate Students</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<div class="container mt-4">
    <h1>Give feedback before closing</h1>
    <br>
    <form action="" method="post">
        <div class="form-group">
            <label for="student1">Student 1:</label>
            <input type="range" class="form-range" min="1" max="5" id="student1" name="student1" required>
            <input type="text" class="form-control" name="student1-feedback" placeholder="Enter feedback message">
            <span id="student1-rating"></span>
        </div>
        <div class="form-group">
            <label for="student2">Student 2:</label>
            <input type="range" class="form-range" min="1" max="5" id="student2" name="student2" required>
            <input type="text" class="form-control" name="student2-feedback" placeholder="Enter feedback message">
            <span id="student2-rating"></span>
        </div>
        <div class="form-group">
            <label for="student3">Student 3:</label>
            <input type="range" class="form-range" min="1" max="5" id="student3" name="student3" required>
            <input type="text" class="form-control" name="student3-feedback" placeholder="Enter feedback message">
            <span id="student3-rating"></span>
        </div>
        <div class="form-group">
            <label for="student4">Student 4:</label>
            <input type="range" class="form-range" min="1" max="5" id="student4" name="student4" required>
            <input type="text" class="form-control" name="student4-feedback" placeholder="Enter feedback message">
            <span id="student4-rating"></span>
        </div>
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this offer?')">Submit and close the offer</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>
<script>
    // Update rating span when the range input value changes
    document.getElementById("student1").addEventListener("input", function() {
        document.getElementById("student1-rating").textContent = " - Rating: " + this.value;
    });

    document.getElementById("student2").addEventListener("input", function() {
        document.getElementById("student2-rating").textContent = " - Rating: " + this.value;
    });

    document.getElementById("student3").addEventListener("input", function() {
        document.getElementById("student3-rating").textContent = " - Rating: " + this.value;
    });

    document.getElementById("student4").addEventListener("input", function() {
        document.getElementById("student4-rating").textContent = " - Rating: " + this.value;
    });
</script>
</body>
</html>