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
    <title>Forgot Password</title>

<style>
.container2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh; /* Adjust as needed */
}

.custom-navbar-container {
    width: 100%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow effect */
    padding: 10px 20px; /* Adjust as needed */
    box-sizing: border-box;
    height: 60px;
    
}

.custom-navbar-brand {
    color: #000;
    transition: color 0.3s ease; 
    font-size: large;
    font-weight: bolder;
    font-size: 30px;
    padding-left: 90px;
}

.password-container {
    width: 100%; /* Ensure full width */
    max-width: 400px; /* Adjust as needed */
    text-align: center; /* Align contents in the center */
    padding: 20px; /* Add padding to create space around elements */
}

.form-input2 {
    margin-top: 20px; /* Adjust as needed */
}

.form-control2 {
    width: 100%;
    height: 50px;
    border-radius: 8px;
    border: 1px solid #272727;
    margin-top: 10px;
}

.btn-reset-password {
    width: 100%;
    height: 50px;
    background-color: #969131;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.btn-reset-password:hover {
    background-color: #a49d0c;
}

</style>
</head>
<body>

<div class="container2">
    <div class="custom-navbar-container">
        <nav class="custom-navbar navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="custom-navbar-brand" href="#" style="text-decoration: none; padding-left: 100px;"><h3>ChickNest</h3></a>
            </div>
        </nav>
    </div>
    
    <section class="password-container">
        <div class="heading-row2">
            <div class="heading-container2">
                <h1>Welcom Back!</h1>
            </div>
        </div>
        <div class="subheading-row">
            <div class="subheading-container2">
                <h2>Reset your Password</h2>
            </div>
        </div>
        <div class="row">
            <div class="form-input2" style="text-align: center;">
                <label class="form-lable2">Please enter the email for Chicknest account:</label>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-container2">
                            <input type="email" class="form-control2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-reset-password">Reset Password</button>
    </section>
</div>

</body>
</html>
