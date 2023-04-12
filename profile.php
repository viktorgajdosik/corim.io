<!DOCTYPE html>
<html>
<head>
    <title>Research Hub - Profile</title>
    <?php include 'includes/header.php'; ?>
    <style></style>
</head>
<body>
    
      <div class="container mt-4">
        <h1>Profile</h1>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h2>Personal Information</h2>
                <br>
                <img src="img/buzga.jpg" alt="Profile Photo" style="width: 150px; height: 150px; border-radius: 50%; border: 1px solid lightgrey">
        
            <br><br>
                <p><strong>Name:</strong> Bužgosaurus Rex (B-rex) </p>
                <p><strong>Email:</strong>  b.rex@researchhub.com</p>
                <p><strong>University:</strong> Jurassic University </p>
                <p><strong>Study programme:</strong>  Paleontology</p>
                <p><strong>Department:</strong> Geology </p>
                <p><strong>Research points:</strong> 666 </p>
                 <a href="edit_profile.php"><i class="fa fa-edit"></i>Edit profile information</a>
                <br><br><br>
                <a href="download_profile.php">Download Profile Information</a>
                <br>
                <a href="delete_profile.php" onclick="return confirm('Are you sure you want to delete your profile?')" style="color: red;">Delete Profile</a>
            </div>
            <div class="col-md-6">
                <h2>Research Work</h2>
            <br>
                    <table class="table">
               
                        <tbody>
                        <tr>
                    <td>Offer 1</td>
                    <td>Description 1</td>
                    <td>2023-04-30</td>
                    <td><a href="view_offer.php" class="btn btn-primary" role="button">View</a></td>
                </tr>
                <tr>
                    <td>Offer 2</td>
                    <td>Description 2</td>
                    <td>2023-05-15</td>
                    <td><a href="view_offer.php" class="btn btn-primary" role="button">View</a></td>
                </tr>
                        
                        </tbody>
                    </table>
               
                    <p>You have not created or participated in any research work yet.</p>
         
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>