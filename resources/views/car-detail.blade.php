<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Liên kết CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
            border-color: #343a40;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
            cursor: pointer;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .table tbody td:first-child {
            font-weight: bold;
        }

        .table tbody td:last-child {
            font-style: italic;
        }

        .table tbody td:nth-child(3) {
            text-transform: uppercase;
        }

        .custom-title {
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="custom-title">Chi tiết xe</h2>
        <div class="car-details">
            <img src="{{"/images/".$car->image}}" alt="Car Image">

            <ul class="list-group">
                <li class="list-group-item active">Car:{{ $car->id }}</li>
                <li class="list-group-item"> Description:{{ $car->description }}</li>
                <li class="list-group-item">Model:{{ $car->model }}</li>

                <li class="list-group-item disabled">Product on : {{ $car->produced_on}}</li>
            </ul>
        </div>
    </div>

    <!-- Liên kết JavaScript của Bootstrap (tùy chọn) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>