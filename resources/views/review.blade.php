<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My Reviews') }}
            </h2>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                Back to Dashboard
            </a>
        </div>
    </x-slot>

    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Your Reviews</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Reviewer</th>
                            <th scope="col">Book ID</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Review</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $rv)
                            <tr>
                                <td class="align-middle">
                                    <strong>{{ $rv->user->name }}</strong>
                                </td>
                                <td class="align-middle">
                                    <strong>{{ $rv->book_id }}</strong>
                                </td>
                                <td class="align-middle">
                                    <span class="badge bg-success">{{ $rv->rating }}</span>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0">{{ $rv->review }}</p>
                                </td>
                                <td class="align-middle text-end">
                                    <a href="{{ route('review.edit', ['review' => $rv]) }}" 
                                       class="btn btn-sm btn-outline-primary me-2">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('review.destroy', ['review' => $rv]) }}" 
                                          style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this review?');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>