<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Edit Profile</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<div class="container mt-4">
    <h1>Edit Profile</h1>
   
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="update_profile.php" enctype="multipart/form-data">
                <h2>Personal Information</h2>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="Bužgosaurus Rex (B-rex)">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="b.rex@researchhub.com">
                </div>
                <div class="form-group">
                    <label for="university">University:</label>
                    <input type="text" class="form-control" id="university" name="university" value="Jurassic University">
                </div>
                <div class="form-group">
                    <label for="programme">Study Programme:</label>
                    <input type="text" class="form-control" id="programme" name="programme" value="Paleontology">
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" id="department" name="department" value="Geology">
                </div>
                <div class="form-group">
                    <label for="photo">Profile Photo:</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>