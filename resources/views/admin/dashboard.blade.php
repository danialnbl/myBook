<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('bookIndex') }}" class="btn btn-primary">
                Add New Book
            </a>
        </div>
    </x-slot>

    <!-- Success Message -->
    <div class="container mt-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <!-- Book Collection -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Book Collection</h2>
        <div class="row g-4">
            @foreach ($books as $book)
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="card shadow-sm h-100 text-center">
                        <!-- Book Image -->
                        <img src="{{ asset($book->image) }}" alt="{{ $book->name }}" 
                             class="card-img-top" style="height: 40vh; object-fit: cover;">

                        <div class="card-body">
                            <!-- Book Name -->
                            <h6 class="card-title mb-3">{{ $book->name }}</h6>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <!-- Edit Button -->
                                <a href="{{ route('books.edit', ['books' => $book]) }}" 
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <!-- Delete Form -->
                                <form method="post" action="{{ route('books.destroy', ['books' => $book]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
