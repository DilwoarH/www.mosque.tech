<div class="card-group">
    @foreach ($cards as $card)
        @include('patterns.card', $card)
    @endforeach
</div>