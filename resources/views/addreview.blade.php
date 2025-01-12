<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Review') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('review.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <!-- user_id -->
                    <div class="mb-4">
                        <label for="user_id" class="block text-sm font-medium text-gray-700">User ID</label>
                        <input 
                            type="text" 
                            name="user_id" 
                            id="user_id" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            value="{{$userId}}" 
                            readonly>
                    </div>

                    <!-- book_id -->
                    <div class="mb-4">
                        <label for="book_id" class="block text-sm font-medium text-gray-700">Book ID</label>
                        <input 
                            type="text" 
                            name="book_id" 
                            id="book_id" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            value="{{$books->book_id}}" 
                            readonly>
                    </div>

                    <!-- Review -->
                    <div class="mb-4">
                        <label for="review" class="block text-sm font-medium text-gray-700">Write your Review</label>
                        <textarea 
                            name="review" 
                            id="review" 
                            rows="5" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            required></textarea>
                    </div>


                    <!-- Year -->
                    <div class="mb-4">
                        <label for="rating" class="block text-sm font-medium text-gray-700">Rate</label>
                        <input 
                            type="number" 
                            name="rating" 
                            id="rating" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            min="1" max="10" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button 
                            type="submit" 
                            class="px-4 py-2 bg-indigo-600 text-black rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">
                            Add Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
