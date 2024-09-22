<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>SignUp</title>
</head>
<body>
    <section class="login-container">
        <div class="heading-row">
            <div class="heading-container">
                <h1>Welcome!</h1>
            </div>
        </div>
        <div class="subheading-row">
            <div class="subheading-container">
                <h2>Sign up to your ChickNest account.</h2>
            </div>
        </div>
        <div class="row">
            <div class="user-input-form">
                <form class="user-form" action="submit.php" method="POST">
                    <div class="form-input">
                        <label class="form-lable">Name</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="iput-container">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-input">
                        <label class="form-lable">E-mail</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="iput-container">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-input">
                        <label class="form-lable">Password</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="iput-container">
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-continue">SignUp</button>
                    <div class="check-more">
                        <p class="small-text">By signing up, you agree to our <a href="terms_and_conditions.html" class="small-link">Terms and Conditions</a></p>
                        <p class="small-text">Already a member? <a href="login.php" class="small-link">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
