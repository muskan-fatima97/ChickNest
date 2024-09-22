<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Interior Design</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <style>
        body {
            font-size: .875rem;
        }
        main {
            padding: 2rem 1.5rem;
        }
        .card-title {
            margin-bottom: 1rem;
        }
        .nav-link {
            font-size: 1rem;
            padding: 10px;
        }
        .nav-link i {
            margin-right: 10px;
        }
        .sidebar {
            height: 100vh;
        }
        .sidebar .nav-link.active {
            background-color: #007bff;
            color: white;
        }
        .sidebar .nav-link:hover {
            background-color: #f8f9fa;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
    </style>

    <script>
        function updateUserCount() {
            $.ajax({
                url: 'get_user_count.php',
                method: 'GET',
                success: function(data) {
                    $('#user-count').text(data);
                }
            });
        }

        function updateBlogCount() {
            $.ajax({
                url: 'get_blog_count.php',
                method: 'GET',
                success: function(data) {
                    $('#blog-count').text(data);
                }
            });
        }

        $(document).ready(function() {
            updateUserCount();
            updateBlogCount();
            setInterval(updateUserCount, 10000); // Update every 10 seconds
            setInterval(updateBlogCount, 10000); // Update every 10 seconds
        });
    </script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-users"></i>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">
                            <i class="fa fa-cogs"></i>
                            Blogs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-cogs"></i>
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Dashboard Content -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text" id="user-count">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Active Blogs</h5>
                            <p class="card-text" id="blog-count">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Attempted Quizes</h5>
                            <p class="card-text">8</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Management Table -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Users</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Sign-Up Time</th>
                                <th>Sign-In Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        require('connection.php');
                        $q = "SELECT id, user_name, email, sign_up_time, sign_in_time FROM users ORDER BY id";
                        $res = mysqli_query($con, $q);

                        if (mysqli_num_rows($res) > 0) { 
                            while ($arr = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <td><?php echo $arr['id']; ?></td>
                                <td><?php echo $arr['user_name']; ?></td>
                                <td><?php echo $arr['email']; ?></td>
                                <td><?php echo $arr['sign_up_time']; ?></td>
                                <td><?php echo $arr['sign_in_time']; ?></td>
                            </tr>
                        <?php
                            }
                        }        
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
