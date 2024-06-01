<!DOCTYPE html>
<html>
<head>
    <title>Customer Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .signup-form {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="a">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php"><img src="../Photo.jpeg" height="60px", width="80px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">HOME <span class="sr-only"></span></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../NOTIFICATION.pdf">NOTIFICATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Grivence.html">GRIVENCE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../help.php">HELP </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="../contact.html">contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../customer_login.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </nav>
          
      </div>
    <div class="container">
        <div class="signup-form">
            <h2>Customer Sign Up</h2>
            <form action="process_signup.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                </div>
                <div class="form-group">
                    <label for="email_id">Email ID</label>
                    <input type="email" class="form-control" id="email_id" name="email_id" required>
                </div>
                <div class="form-group">
                    <label for="district">District</label>
                    <input type="text" class="form-control" id="district" name="district" required>
                </div>
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="text" class="form-control" id="pin" name="pin" required>
                </div>
                <div class="form-group">
                    <label for="area_name">Area Name</label>
                    <input type="text" class="form-control" id="area_name" name="area_name" required>
                </div>
                <div class="form-group">
                    <label for="profile_image">Profile Image</label>
                    <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <footer class="bg-light text-center py-4" style="margin-top: 2%;">
    <div class="container">
      <p class="m-0">© 2023 THE CURIOUS MINDS. All rights reserved.</p>
      <p class="m-0">Website created by <a href="#">THE CURIOUS MINDS TEAM </a></p>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
