<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
 <style>

    
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white" style="margin-right: 200px;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.svg" alt="CORIM Logo" height="30">  </a> <ul class="navbar-spacing"></ul>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>  
    </div>
</nav>

<div class="sidebar">
    <a href="index.php" class="logo">
        <img src="img/logo.svg" alt="CORIM Logo" height="30">
    </a>
    <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action"><i class="fa fa-home"></i><span>Dashboard</span></a>
        <a href="profile.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i><span>Profile</span></a>
        <a href="create_offer.php" class="list-group-item list-group-item-action"><i class="fa fa-plus-circle"></i><span>Create Offer</span></a>
        <a href="notifications.php" class="list-group-item list-group-item-action"><i class="fa fa-bell"></i><span>Notifications</span></a>
        <a href="register.php" class="list-group-item list-group-item-action"><i class="fa fa-sign-in"></i><span>Sign up</span></a>
    </div>
</div>


<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php
$current_url = $_SERVER['REQUEST_URI'];
?>
 <style>

    
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white" style="margin-right: 200px;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.svg" alt="CORIM Logo" height="30">  </a>
            <ul class="navbar-spacing"></ul>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>  
    </div>
</nav>

<div class="sidebar">
    <a href="index.php" class="logo">
        <img src="img/logo.svg" alt="CORIM Logo" height="30">
    </a>
    <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'active'; ?>">
            <i class="fa fa-home"></i><span>Dashboard</span>
        </a>
        <a href="profile.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'profile.php') echo 'active'; ?>">
            <i class="fa fa-user"></i><span>Profile</span>
        </a>
        <a href="create_offer.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'create_offer.php') echo 'active'; ?>">
            <i class="fa fa-plus-circle"></i><span>Create Offer</span>
        </a>
        <a href="notifications.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'notifications.php') echo 'active'; ?>">
            <i class="fa fa-bell"></i><span>Notifications</span>
        </a>
        <a href="register.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'register.php') echo 'active'; ?>">
            <i class="fa fa-sign-in"></i><span>Sign up</span>
        </a>
    </div>
</div>


<div class="fixed-bottom">
  <nav class=" navbar-light bg-white">
    <div class="container">
      <ul class="navbar-nav d-flex justify-content-between w-100">
        <li class="nav-item">
        <a class="nav-link <?php if (strpos($current_url, 'dashboard.php') !== false) { echo 'active'; } ?>" href="dashboard.php"><i class="fa fa-home"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if (strpos($current_url, 'profile.php') !== false) { echo 'active'; } ?>" href="profile.php"><i class="fa fa-user"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if (strpos($current_url, 'create_offer.php') !== false) { echo 'active'; } ?>" href="create_offer.php"><i class="fa fa-plus-circle"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if (strpos($current_url, 'notifications.php') !== false) { echo 'active'; } ?>" href="notifications.php"><i class="fa fa-bell"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if (strpos($current_url, 'register.php') !== false) { echo 'active'; } ?>" href="register.php"><i class="fa fa-sign-in"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</div>

</body>
</html>