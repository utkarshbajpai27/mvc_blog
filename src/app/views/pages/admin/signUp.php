<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SignUp Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <script src="<?php echo URLROOT?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="<?php echo URLROOT?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container-fluid">
      <div id="header" class="form-signin"></div>
      <div id="content" class="row">
        <form action="databaseEntry" method="POST">
            <h1 class="col-md-4 col-sm-4  mx-auto">Sign up</h1>
            <div class="form-floating col-md-4 col-sm-4  mx-auto py-1">
                <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="username">
                <label for="floatingUsername">Username</label>
            </div>
            <div class="form-floating col-md-4 col-sm-4  mx-auto py-1">
                <input type="text" class="form-control" id="floatingFirstName" name="first" placeholder="first name">
                <label for="floatingFirstName">First Name</label>
            </div>
            <div class="form-floating col-md-4 col-sm-4  mx-auto py-1">
                <input type="text" class="form-control" id="floatingLastName" name="last" placeholder="last name">
                <label for="floatingLastName">Last Name</label>
            </div>
            <div class="form-floating col-md-4 col-sm-4  mx-auto py-1">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating col-md-4 col-sm-4  mx-auto py-1">
                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <a href="login" class="link-success">Already a user ? Sign In</a>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> I agree with terms and condition
                </label>
            </div>
            <button class="btn btn-lg btn-primary col-md-4 col-sm-4  mx-auto py-2" 
            name="signUp" type="submit">Sign Up</button>
        </form>
      </div>
      <div id="footer">
      <p class="mt-5 mb-3 text-muted">&copy; Cedcoss technologies</p>
    </div>
    </div>
</body>
</html>