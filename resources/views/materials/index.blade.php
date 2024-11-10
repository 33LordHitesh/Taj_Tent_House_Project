<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin: 10px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Materials</h1>
        <div class="row">
            @foreach($materials as $material)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $material->image_url }}" class="card-img-top" alt="{{ $material->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $material->name }}</h5>
                            <p class="card-text">{{ $material->description }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $material->price }}</p>
                            <p class="card-text"><strong>Stock:</strong> {{ $material->stock }}</p>
                            <a href="{{ route('materials.show', $material->id) }}" class="btn btn-primary">More Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
