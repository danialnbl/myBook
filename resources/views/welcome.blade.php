<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to myBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">myBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @if (Route::has('login'))
                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    {{-- <div class="d-flex flex-wrap gap-4 justify-content-start">
        @foreach($books as $book)
            <div class="card" style="width: 12rem;">
                <img src="{{ $book->image_url }}" class="card-img-top" alt="{{ $book->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ Str::limit($book->description, 50) }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary btn-sm">Details</a>
                </div>
            </div>
        @endforeach
    </div> --}}

    <div class="relative bg-cover bg-center" style="background-image: url('https://collegeinfogeek.com/wp-content/uploads/2018/11/Essential-Books.jpg');height: 20vh;">
        <div class="absolute inset-0 bg-black opacity-50"></div> 
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Welcome to myBook</h1>
            <p class="text-lg text-white">Discover, review, and share your love for books with our community.</p>
        </div>
    </div>


    <section class="py-5">
        <div class="container text-center">
            <h2>Features</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Review Books</h5>
                            <p class="card-text">Write and read reviews on thousands of books.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Connect with Readers</h5>
                            <p class="card-text">Join a community of book enthusiasts and exchange ideas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Track Your Favorites</h5>
                            <p class="card-text">Keep a personalized list of books you love or plan to read.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>