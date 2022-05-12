<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Sessions</title>
</head>
<body>

<div class="container">
  <div class="card" style="margin-top: 5%">
    <div class="card-body">
    <h1 style="text-align: center">Create an account</h1>
        <form action="./sessions/createUser.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name="user">
          <div id="emailHelp" class="form-text">Don't use a real email, this is just an exam I did in 1 hour, this app has literally 0 security</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass" name="pass">
          <div id="emailHelp" class="form-text">Same as above, use a random password like 123</div>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up!</button>
        <a href="./index.php"><button type="button" class="btn btn-success">Cancel</button> </a>
        <br>
        <br>
        <a href="./login.php">Already Have an account? Log in here!</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>