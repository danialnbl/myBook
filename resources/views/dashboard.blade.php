<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div>
                <a href="{{ route('review.view') }}" class="btn btn-outline-secondary me-2">My Reviews</a>
            </div>
        </div>
    </x-slot>

    <div class="container my-5">
        <h2 class="text-center mb-4">Book Collection</h2>
        <div class="row g-4">
            @foreach ($books as $book)
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="card shadow-sm h-100 text-center">
                        <a href="{{ route('books.show', [$book]) }}" style="text-decoration: none; color: inherit;">
                            <img src="{{ asset($book->image) }}" 
                                 alt="{{ $book->name }}" 
                                 class="card-img-top" 
                                 style="height: 40vh; object-fit: cover;">
                            <div class="card-body">
                                <h6 class="card-title">{{ $book->name }}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
