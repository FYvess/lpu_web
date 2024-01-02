<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User AcCount Info</title>
  <link rel="stylesheet" href="css/navigation bar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
  <div class="d-flex">
    <div class="vh-100 sticky-top bg-danger" style="width: 280px;">
      <h1 class="text-white fs-5 text-center my-5">Yves's Enterprise</h1>
      <nav class="NAVBAR">
        <ul class="nav flex-column mb-auto">
          <li><a href="admin_page.php">Home</a></li>
          <li><a href="employee_registation_save.php">Employee Registration</a></li>
          <li><a href="emp_rep.php">Employee Report</a></li>
          <li><a href="payroll.php">Payroll</a></li>
          <li><a href="payroll_rep.php">Payroll Report</a></li>
          <li><a href="STORE/PANTS.php">POS</a></li>
          <li><a href="pos_rep.php">POS Sales Report</a></li>
          <li><a href="user_account.php">User Account</a></li>
          <li><a href="login_form.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="flex-grow-1">
      <div class="container my-5">
        <div class="container-fluid">
          <div class="row content">
            <div class="col-sm-9">
              <div class="well">
                <h4>User Account Information</h4>
                <div class="card" style="width: 150px; height: 150px">
                </div>
              </div>
              <div class="row my-4">
                <div class="col-sm-3">
                  <div class="well">
                    <h4>Users</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="well">
                    <h4>Pages</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="well">
                    <h4>Sessions</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="well">
                    <h4>Bounce</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-sm-4">
                  <div class="well">
                    <h4>Designation</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="well">
                    <h4>Username</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="well">
                    <h4>Password</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-sm-4">
                  <div class="well">
                    <h4>Confirm Password</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="well">
                    <h4>User Type</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="well">
                    <h4>Update</h4>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>

                <div class="col-sm-4 my-5">
                  <div class="well">
                  </div>
                </div>
                <div class="col-sm-4 my-5">
                  <div class="well">
                    <button type="button" class="btn btn-primary width:">Update</button>
                    <button type="button" class="btn btn-warning">Delete</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                  </div>
                </div>
                <div class="col-sm-4 my-5">
                  <div class="well">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>