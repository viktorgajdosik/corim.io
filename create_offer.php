<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Create Research Offer</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
   
    <div class="container mt-4">
        <h1>Create Research Offer</h1>
        <br>
        <form>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" class="form-control" id="deadline">
            </div>
            <button type="submit" class="btn btn-primary">Create Offer</button>
        </form>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>