<div class="container my-5">
    <table class="table">
        <tbody>
            @foreach ($reviews as $rv)
                <tr>
                    <h5>{{$rv->user->name}}</h5>
                    <h6>{{$rv->rating}}</h6>
                    <p>{{$rv->review}}</p>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>