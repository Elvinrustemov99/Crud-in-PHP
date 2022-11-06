<?php require_once 'insert.php' ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
  
  <title>Crud</title>
</head>
<body>

<div class="container my-5">

  <form method="post">

    <div class="mb-3">
      <label>Ad:</label>
      <input type="text" class="form-control" name="username" placeholder="Name" required>
    </div>

    <div class="mb-3">
      <label>E-posta</label>
      <input type="email" class="form-control" name="email" placeholder="E-post" required>
    </div>

    <div class="mb-3">
      <label>Tel:</label>
      <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
    </div>

    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Insert</button>

  </form>
</div>

</body>
</html>