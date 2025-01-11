<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container my-5">
        <h2 class="text-center mb-4">Book Collection</h2>
        <table class="table table-borderless text-center">
            <tbody>
                @foreach ($books->chunk(6) as $chunk)
                    <tr>
                        @foreach ($chunk as $book)
                            <td>
                                <a href="{{ route('books.show', [$book]) }}" style="text-decoration: none; color: inherit;">
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

</x-app-layout>
