<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master.css">
  <title>life_admin</title>
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">life</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="admin/">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <div class="container">
    <div class="card">
      <div class="card-header">
        Register
      </div>
      <div class="card-body">
        <form action="php/register/reg.php" method="post">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">ID</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="username">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon2">DisplayName</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon2" name="display">
          </div>


          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">Pass</span>
            </div>
            <input type="password" class="form-control" aria-describedby="basic-addon3" name="pass">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon4">Retype</span>
            </div>
            <input type="password" class="form-control" aria-describedby="basic-addon4" name="repass">
          </div>

          <button type="submit" class="btn btn-primary">register</button>
        </form>
      </div>
    </div>
  </div>





</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
