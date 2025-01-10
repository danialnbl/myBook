<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Search Bar -->
                <div class="mb-4">
                    <form method="GET" action="{{ route('search') }}">
                        <div class="flex">
                            <input 
                                type="text" 
                                name="query" 
                                placeholder="Search books..." 
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            >
                            <button 
                                type="submit" 
                                class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">
                                Search
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Book Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($books as $book)
                        <div class="border rounded-md shadow-md overflow-hidden">
                            <img 
                                src="{{ $book->image_url }}" 
                                alt="{{ $book->title }}" 
                                class="w-full h-48 object-cover"
                            >
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">{{ $book->title }}</h3>
                                <p class="text-sm text-gray-600">{{ $book->author }}</p>
                                <p class="mt-2 text-gray-700">{{ Str::limit($book->description, 100) }}</p>
                                <a 
                                    href="{{ route('books.show', $book->id) }}" 
                                    class="block mt-4 text-indigo-600 hover:underline">
                                    Read more
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-6">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
