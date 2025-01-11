@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Book Details</h2>
    <div class="card mx-auto" style="max-width: 800px;">
        <!-- Book Image -->
        <img src="{{ asset($books->image) }}" alt="{{ $books->name }}" class="card-img-top" style="height:400px; object-fit:cover;">
        
        <div class="card-body">
            <!-- Book Name -->
            <h3 class="card-title text-center">{{ $books->name }}</h3>

            <!-- Book Details -->
            <p class="card-text"><strong>Author:</strong> {{ $books->author }}</p>
            <p class="card-text"><strong>Genre:</strong> {{ $books->genre }}</p>
            <p class="card-text"><strong>Year Published:</strong> {{ $books->year }}</p>
            <p class="card-text"><strong>Synopsis:</strong> {{ $books->sypnosis }}</p>

            <!-- Back to List Button -->
            <div class="text-center mt-4">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Collection</a>
            </div>
        </div>
    </div>
</div>
@endsection