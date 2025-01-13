<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Book Details') }}
            </h2>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Back to Collection</a>
        </div>
    </x-slot>

    <div class="container my-5">
        <!-- Book Details Card -->
        <div class="card mx-auto shadow-lg" style="max-width: 800px;">
            <!-- Book Image -->
            <img src="{{ asset($books->image) }}" alt="{{ $books->name }}" 
                 class="card-img-top" style="height: 400px; object-fit: contain;">

            <div class="card-body">
                <!-- Book Title -->
                <h3 class="card-title text-center mb-4">{{ $books->name }}</h3>

                <!-- Book Details -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Author:</strong> {{ $books->author }}</li>
                    <li class="list-group-item"><strong>Genre:</strong> {{ $books->genre }}</li>
                    <li class="list-group-item"><strong>Year Published:</strong> {{ $books->year }}</li>
                    <li class="list-group-item"><strong>Synopsis:</strong> {{ $books->sypnosis }}</li>
                </ul>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-5">
            <h3 class="text-center mb-4">Reviews</h3>

            <!-- Write Review Button -->
            <div class="text-center mb-4">
                <a href="{{ route('review.index', [$books]) }}" class="btn btn-primary">Write a Review</a>
            </div>

            <!-- Reviews Table -->
            <div class="card shadow">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Reviewer</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($review as $rv)
                                <tr>
                                    <td class="align-middle">
                                        <strong>{{ $rv->user->name }}</strong>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-success">{{ $rv->rating }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0">{{ $rv->review }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
