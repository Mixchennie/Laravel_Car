<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(110, 228, 246, 0.886);
    }

    h1 {
      font-size: 30px;
      margin-bottom: 30px;
      text-align: center;
      color: #e41010;
    }

    label {
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 3px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #555;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      border: none;
      color: #fff;
      font-weight: bold;
      text-align: center;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Trang Thêm Mới Một Xe</h1>

    <form action="/create-car" method="POST">
      <div class="form-group">
        <label for="make">Model:</label>
        <input type="text" id="make" name="make" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="model">Description:</label>
        <input type="text" id="model" name="model" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="img">Image:</label>
        <input type="file" id="img" name="img" accept="image/*" class="form-control-file" required>
      </div>

      <input type="submit" value="Tạo xe" class="btn btn-primary">
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
