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
  

<div class="container" style="margin-top: 5%;">
  <div class="card">
    <div class="card-body">
      <div class="row">
        
        <?php require_once "connection.php"; 
            $id = $_GET["id"];
            $sql = "SELECT * FROM employees WHERE id = '$id';";
            $result = $conn->query($sql);

            echo'<form action="update.php" method="post">';
            
            while($row = $result->fetch_assoc()) {
              echo '
              <input type="hidden" value='. $row["id"].' name="emid" id="emid">
              <h1 style="text-align: center">'. $row["name"].'</h1>
              <div class="col-2">
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" value='. $row["name"].'>
              <br>
              <br>
              <label for="addr">Location:</label>
              <input type="text" name="addr" id="addr" value='. $row["address"].'>
              <br>
              <br>
              <label for="slry">Salary:</label>
              <input type="number" name="slry" id="slry" value='. $row["salary"].'>
              <br>
              <br>
              </div>

              <button class="btn btn-primary" style="margin-top: 3%" type="submit">Save</button>


              ';
            }

            echo '</form>';
        ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>