@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Book Details</h2>
    <div class="card mx-auto" style="max-width: 600px;">
        <img src="{{ asset($books->image) }}" alt="{{ $books->name }}" class="card-img-top" style="height:50vh; object-fit:cover;">
        <div class="card-body">
            <h3 class="card-title text-center">{{ $books->name}}</h3>
            <p class="card-text"><strong>Author:</strong> {{ $books->author }}</p>
            <p class="card-text"><strong>Synopsis:</strong> {{ $books->sypnosis }}</p>
            <p class="card-text"><strong>Published:</strong> {{ $books->year }}</p>
            <p class="card-text"><strong>genre:</strong> ${{$books->genre }}</p>
            <div class="text-center">
                <a href="{{ route('books.index') }}" class="btn btn-primary">Back to Collection</a>
            </div>
        </div>
    </div>
</div>
@endsection