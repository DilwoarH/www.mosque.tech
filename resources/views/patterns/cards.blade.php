<div class="row">
    @foreach ($cards as $card)
        <div class="col-lg-4 col-md-6 col-sm-12">
            @include('patterns.card', $card)
        </div>
    @endforeach
</div>