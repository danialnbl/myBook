<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="{{ route('bookIndex') }}" class="btn btn-primary">
        Add New Book
    </a>

    <div class="container my-5">
        <h2 class="text-center mb-4">Book Collection</h2>
        <table class="table table-borderless text-center">
            <tbody>
                @foreach ($books->chunk(6) as $chunk)
                    <tr>
                        @foreach ($chunk as $book)
                            <td>
                                <a href="{{ route('books.show', ['id' => $book->book_id]) }}" style="text-decoration: none; color: inherit;">
                                    <div style="text-align: center;">
                                        <img src="{{ asset($book->image) }}" alt="{{ $book->name }}" style="height:40vh;width:25vh; display: block; margin: 0 auto;">
                                        <div>{{ $book->name }}</div>
                                    </div>
                                </a>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
