{{-- <!-- resources/views/car-detail.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Detail</title>
    <!-- Liên kết CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Car Detail</h2>
        <div>
            <p><strong>Model:</strong> {{ $car->model }}</p>
            <p><strong>Produced On:</strong> {{ $car->produced_on }}</p>
            <p><strong>Description:</strong> {{ $car->description }}</p>
            <div>
                <strong>Image:</strong>
                <br>
                <img src="{{ asset('images/'.$car->image) }}" alt="Car Image" style="max-width: 200px; margin-top: 10px;">
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('cars.delete', $car->id) }}" class="btn btn-danger">Delete</a>
        </div>
    </div>

    <!-- Liên kết JavaScript của Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}