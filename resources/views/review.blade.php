<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Reviews') }}
        </h2>
        <a href="{{ route('dashboard') }}" style="text-decoration: none; color: inherit;">Back to Dashboard</a>
    </x-slot>
    <div class="container my-5">
        
        <table class="table">
            <tbody>
                @foreach ($reviews as $rv)
                    <tr>
                        <td>
                            <h5>{{$rv->user->name}}</h5>
                            <h6>{{$rv->rating}}</h6>
                            <p>{{$rv->review}}</p>
                            <a href="{{ route('review.edit', ['review' => $rv]) }}" style="text-decoration: none; color: inherit;">Edit</a>
                            <form method="post" action="{{route('review.destroy',['review' => $rv])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout> 
