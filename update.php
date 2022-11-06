<?php require_once 'up_date.php' ?>

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
  <title>Qeydiyyat</title>
</head>
<body>

<div class="container my-5">

  <form method="post">

    <div class="mb-3">
      <label>Name</label>
      <input type="text" class="form-control" name="username" value="<?= $visi['username'] ?>" required>
    </div>

    <div class="mb-3">
      <label>E-post</label>
      <input type="email" class="form-control" name="email" value="<?= $visi['email'] ?>" required>
    </div>

    <div class="mb-3">
      <label>Phone</label>
      <input type="tel" class="form-control" name="phone" value="<?= $visi['phone'] ?>" required>
    </div>

    <div class="mb-3">
      <label>Password</label>
      <input type="text" class="form-control" name="password" value="<?= $visi['password'] ?>" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Update</button>

  </form>
</div>

</body>
</html>