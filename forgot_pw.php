<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
<div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <h1 class="display-3 text-center">Registration and Login System</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3" style="width: 30rem; margin:0 auto;">
                    <div class="card-header">
                        <h5 class="text-center">Forgot Password</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <form action="forgot_pw_backend.php" method="post">
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password" required>

                                </div>
                                

                                <p class="text-center"><button type="submit" name="submit" class="btn btn-info mt-2">Reset</button></p>
                                
                            </form>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>