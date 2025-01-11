<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Book Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Book Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            required>
                    </div>

                    <!-- Author -->
                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input 
                            type="text" 
                            name="author" 
                            id="author" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            required>
                    </div>

                    <!-- Synopsis -->
                    <div class="mb-4">
                        <label for="sypnosis" class="block text-sm font-medium text-gray-700">Synopsis</label>
                        <textarea 
                            name="sypnosis" 
                            id="sypnosis" 
                            rows="5" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            required></textarea>
                    </div>

                    <!-- Upload Image -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                        <input 
                            type="file" 
                            name="image" 
                            id="image" 
                            class="mt-1 block w-full text-gray-700" 
                            required>
                    </div>

                    <!-- Year -->
                    <div class="mb-4">
                        <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                        <input 
                            type="number" 
                            name="year" 
                            id="year" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            required>
                    </div>

                    <!-- Genre -->
                    <div class="mb-4">
                        <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                        <select 
                            name="genre" 
                            id="genre" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            required>
                            <option value="">Select a Genre</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            <option value="Mystery">Mystery</option>
                            <option value="Science Fiction">Science Fiction</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Romance">Romance</option>
                            <option value="Biography">Biography</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button 
                            type="submit" 
                            class="px-4 py-2 bg-indigo-600 text-black rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">
                            Add Book
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
