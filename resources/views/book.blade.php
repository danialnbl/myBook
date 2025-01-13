<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Details') }}
        </h2>
        <div class="text-center mt-4">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Collection</a>
        </div>
    </x-slot>
    <div class="container my-5">
        <div class="card mx-auto" style="max-width: 800px;">
            <!-- Book Image -->
            <img src="{{ asset($books->image) }}" alt="{{ $books->name }}" class="card-img-top" style="height:400px; object-fit:contain;">
            
            <div class="card-body">
                <!-- Book Name -->
                <h3 class="card-title text-center">{{ $books->name }}</h3>
    
                <!-- Book Details -->
                <p class="card-text"><strong>Author:</strong> {{ $books->author }}</p>
                <p class="card-text"><strong>Genre:</strong> {{ $books->genre }}</p>
                <p class="card-text"><strong>Year Published:</strong> {{ $books->year }}</p>
                <p class="card-text"><strong>Synopsis:</strong> {{ $books->sypnosis }}</p>
    
                <!-- Back to List Button -->
                
            </div>
        </div>
        <h3 class="text-center mb-4">Reviews</h3>
        <a href="{{ route('review.index', [$books]) }}" class="btn btn-danger">Write Review</a>
        <table class="table">
            <tbody>
                @foreach ($review as $rv)
                    <tr>
                        <h5>{{$rv->user->name}}</h5>
                        <h6>{{$rv->rating}}</h6>
                        <p>{{$rv->review}}</p>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>


