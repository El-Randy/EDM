<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../lib/css/my.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://img.freepik.com/premium-vector/black-arrow-with-symbol-it-that-says-v_764382-181695.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Kapanggal x Virtucio
            </a>
        </div>
        <a href="login.php" class="text-decoration-none">Login</a>
        </nav>

        <div class="container">
        <form action="" class="card p-4" id="registerForm">
            <div class="row">
              <h2 class="text-center">Register Form</h2>
            
              <div class="col-lg-6 col-md-12 col-sm-12">
                  <label for="firstname" class="form-label">FirstName</label>
                  <input type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control">
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                  <label for="lastname" class="form-label">LastName</label>
                  <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control">
              </div>

              <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" placeholder="Email" class="form-control">
              </div>
              <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="address" name="address" id="address" placeholder="Address" class="form-control">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <label for="gender" class="form-label">Gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                  <label for="phoneNum" class="form-label">Phone No.</label>
                  <input type="tel" id="phoneNum" class="form-control" name="phone_number" placeholder="Phone Number">
                  </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password" id="confirmpassword" placeholder="Confirm Password">
              </div>
            </div>

            <button class="btn btn-success mt-3">Register</button>
        </form>
        </div>
</body>
</html>