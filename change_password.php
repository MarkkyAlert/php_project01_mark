<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Log out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">
                                <span data-feather="home"></span>
                                <p style="font-size:20px;">Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_page.php">
                                <span data-feather="file"></span>
                                Manage Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="change_password.php">
                                <span data-feather="shopping-cart"></span>
                                Change Password
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">




                <h2 class="h4">All User Details</h2>
                <div class="card mt-3" style="width: auto;">
                    <div class="card-header">
                        <h5 class="text-center">Change Password</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <form action="change_password_backend.php" method="post">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Old Password</label>
                                    <input type="text" class="form-control" name="old_password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="New Password" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail3" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Confirm Password" required>

                                </div>
                                


                                <p class="text-center"><button type="submit" name="submit" class="btn btn-info mt-2">Change</button></p>
                                
                            </form>
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>