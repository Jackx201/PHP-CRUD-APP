<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<?php 
  $newUser = $_GET["newUser"];
  if($newUser == true){
    echo"<h5 style='text-align:center; margin-top:3%'>New User Created Succesfully!</h5>";
    echo"<h5 style='text-align:center;'>Please Login</h5>";
  }
?>
<div class="container">
  <div class="card" style="margin-top: 5%">
    <div class="card-body">
    <h1 style="text-align: center">Login</h1>
        <form action="./sessions/validateUser.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
          <div id="emailHelp" class="form-text">Don't use a real email, this is just an exam I did in 1 hour, this app has literally 0 security</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          <div id="emailHelp" class="form-text">Same as above, use a random password like 123</div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="./index.php"><button type="button" class="btn btn-success">Cancel</button> </a>
        <br>
        <br>
        <a href="./signup.php">You don't have an account? Create One here!</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>