<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Resources</h2>
  <form action="insert.php" method="POST">
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="title">
    </div>
    <div class="form-group">
      <label for="email">Description:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="description">
    </div>
    <div class="form-group">
      <label for="pwd">URL (MediaFire):</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="url">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
