<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Diagnosis Exam</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">UTLD</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Sign Up</a>
        </li>
    </ul>
  </div>
    
  </div>
</nav>


<div class="container" style="text-align: center;">
  <h1>Diagnosis Exam</h1>
</div>

<div class="container" style="margin-top: 3%;">
<div class="card">
  <div class="card-body">
  <h5 class="card-title">New Employee</h5>
  <br>
<div class="row">
<div class="col"><form action="insert.php" method="post">

<div class="col">
<label for="name">Name</label>
  <input type="text" name="name" id="name"></div>
</div>

<div class="col">
  <label for="pass">Location</label>
  <input type="text" name="addr" id="pass">
</div>

<div class="col">  
  <label for="slry">Salary</label>
  <input type="number" name="slry" id="slry">
</div>
  
  <div class="row">
    <div class="col">
     <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
  </div>
</div>
</div>

<br>

<div class="container">
  <div class="card">
    <h2 style="text-align: center">Employees</h2>
    <?php require_once "connection.php"; 
    $sql = "SELECT * FROM employees;";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '    
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Salary</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>';

  while($row = $result->fetch_assoc()) {
    echo 
    '
      <tr>
        <td>'. $row["id"].'</td>
        <td>'. $row["name"].'</td>
        <td>'. $row["address"].'</td>
        <td>'. $row["salary"].'$</td>
        <td><a href="updateForm.php?id='. $row["id"].'"><button class="btn btn-success">Edit</button> </a></td>
        <td><a href="delete.php?id='. $row["id"].'"><button class="btn btn-danger">Delete</button> </a></td>
      </tr>
  ';
  }
  echo"
  </tbody>
  </table>
  ";
} else {
  echo "No results were found";
}
?>


</div>
</div>
</body>

<footer>
  <div class="card" style="margin-top: 5%; text-align: center; padding-top: 3%; padding-bottom: 3%">
    <h5> Zahúl Guadalupe Domínguez Chávez - 8th Quarter </h5>
    <p> Professional Web Applications Development by Mr. Felipe de Jesús Valles López </p>
  </div>
</footer>
</html>