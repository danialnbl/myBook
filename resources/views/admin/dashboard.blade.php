<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="{{ route('bookIndex') }}" class="btn btn-primary">
        Add New Book
    </a>

    {{-- <div class="container my-5">
        <h2 class="text-center mb-4">Book Collection</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-4">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset($book->image) }}" alt="{{ $book->name }}" style="height:60vh;width:30vh">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
