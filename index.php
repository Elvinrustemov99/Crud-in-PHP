<?php require_once 'read.php' ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>İstifadəçilər</title>
</head>
<body>
<?php ?>
<div class="container">
  <button class="btn btn-primary my-5" type="submit" name="useradd"><a href="user.php" class="text-light">User Add</a>
  </button>

  <table class="table">
    <table class="table table-hover">

      <thead>
      <tr>
        <th scope="col">User Name</th>
        <th scope="col">E-post</th>
        <th scope="col">Phone</th>
        <th scope="col">Date</th>
        <th scope="col">Operation</th>
      </tr>
      </thead>
      
      <?php foreach ($row as $rows): ?>
        <tbody>
        <tr>
          <td><?= $rows['username'] ?></td>
          <td><?= $rows['email'] ?></td>
          <td><?= $rows['phone'] ?></td>
          <td><?= $rows['date'] ?></td>

          <td>
            <button class="btn btn-primary"><a href="update.php?update=<?= $rows['id'] ?>" class="text-light">Update</a>
            </button>
            <button class="btn btn-danger"><a href="delete.php?delete=<?= $rows['id'] ?>" class="text-light">Delete</a>
            </button>
          </td>
        </tr>
        </tbody>
      <?php endforeach; ?>

    </table>
</div>
</body>
</html>